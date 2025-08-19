<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use App\Http\Resources\GalleryResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('q');
        $validSortColumns = ['id', 'path_name', 'original_name'];
        $sortBy = in_array($request->input('sort_by'), $validSortColumns, true) ? $request->input('sort_by') : 'id';
        $sortDirection = in_array($request->input('sort_direction'), ['asc', 'desc'], true) ? $request->input('sort_direction') : 'desc';
        $limit = $request->input('limit', 5);

        $limit = is_numeric($limit) && $limit > 0 && $limit <= 100 ? (int)$limit : 5;

        $query = Gallery::query();

        if ($searchTerm) {
            $query->where(function ($q) use ($searchTerm) {
                $q->where('path_name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('original_name', 'like', '%' . $searchTerm . '%');
            });
        }

        $query->orderBy($sortBy, $sortDirection);

        $query->with('user');


        $galleries = $query->paginate($limit);

        $galleries->appends([
            'q' => $searchTerm,
            'sort_by' => $sortBy,
            'sort_direction' => $sortDirection,
            'limit' => $limit,
        ]);

        return GalleryResource::collection($galleries);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        // return dd($request);
        $inputImages = $request->file('images');
        $manager = new ImageManager(Driver::class);

        $images = [];
        foreach ($inputImages as $image) {

            $path = $image->store('galleries', 'public');
            // $path = base64_decode($path);
            $currentImage = $manager->read(public_path('storage/' . $path));

            // saving thumbnails images
            $thumbnailFolder = public_path('storage/thumbnails/galleries');
            if (!file_exists($thumbnailFolder)) {
                mkdir($thumbnailFolder, 0775, true);
            }
            $manager->read(public_path('storage/' . $path))->cover(100, 100)->save(public_path('storage/thumbnails/' . $path));

            // saving thumbnails images
            $previewFolder = public_path('storage/previews/galleries');
            if (!file_exists($previewFolder)) {
                mkdir($previewFolder, 0775, true);
            }

            $manager->read(public_path('storage/' . $path))->scale(700)->save(public_path('storage/previews/' . $path));

            // saving thumbnails images
            $largeFolder = public_path('storage/larges/galleries');
            if (!file_exists($largeFolder)) {
                mkdir($largeFolder, 0775, true);
            }
            $manager->read(public_path('storage/' . $path))->scale(1280)->save(public_path('storage/larges/' . $path));

            $images[] = [
                'path_name' => $path,
                'original_name' => $image->getClientOriginalName(),
                'user_id' => auth()->id(),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        Gallery::insert($images);

        $insertedImages = Gallery::whereIn('path_name', array_column($images, 'path_name'))->get();
        return response()->json([
            'message' => 'Image uploaded successfully',
            'data' => GalleryResource::collection($insertedImages)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $validated = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:galleries,id',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => 'Invalid Gallery ID'
            ], 404);
        }

        $gallery  = Gallery::find($id);

        return response()->json([
            'message' => 'Gallery retrieved successfully',
            'data' => new GalleryResource($gallery)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateGalleryRequest $request, Gallery $gallery)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $validated = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:galleries,id',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => 'Invalid Gallery ID'
            ], 404);
        }

        $gallery = Gallery::find($id);

        $currentImage = $gallery->path_name;

        Storage::disk('public')->delete($currentImage);
        Storage::disk('public')->delete("thumbnails/" . $currentImage);
        Storage::disk('public')->delete("previews/" . $currentImage);
        Storage::disk('public')->delete("larges/" . $currentImage);

        $gallery->delete();

        return response()->json([
            'message' => 'Image deleted successfully'
        ]);
    }
}
