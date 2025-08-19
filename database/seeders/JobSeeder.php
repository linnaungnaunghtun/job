<?php

namespace Database\Seeders;

use App\Models\job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [[
            'id' => 1,
            'company_name' => 'PT. A',
            'description' => 'PT. A adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1661689077583-1f04fcdc7a81?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8QnVzaW5lc3MlMjBBbmFseXN0fGVufDB8fDB8fHww',
            'salary' => '500000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Jl. Jend. Sudirman, RT.1',
            'category' => 'Business Analyst',
        ],
        [
            'id' => 2,
            'company_name' => 'PT. B',
            'description' => 'PT. B adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1720287601920-ee8c503af775?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8U29mdHdhcmUlMjBEZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'salary' => '1000000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Bandung',
            'category' => 'Software Developer',

        ],
        [
            'id' => 3,
            'company_name' => 'PT. C',
            'description' => 'PT. C adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://images.unsplash.com/photo-1542744173-05336fcc7ad4?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fEJ1c2luZXNzJTIwQW5hbHlzdHxlbnwwfHwwfHx8MA%3D%3D',
            'salary' => '600000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Jakarta',
            'category' => 'Business Analyst',

        ],
        [
            'id' => 4,
            'company_name' => 'PT. D',
            'description' => 'PT. D adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fFNvZnR3YXJlJTIwRGV2ZWxvcGVyfGVufDB8fDB8fHww',
            'salary' => '700000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Surabaya',
            'category' => 'Software Developer',
        ],
        [
            'id' => 5,
            'company_name' => 'PT. E',
            'description' => 'PT. E adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1682126325927-0e6399d5d170?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8RGF0YSUyMFNjaWVudGlzdHxlbnwwfHwwfHx8MA%3D%3D',
            'salary' => '800000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Jakarta',
            'category' => 'Data Scientist',

        ],
        [
            'id' => 7,
            'company_name' => 'PT. G',
            'description' => 'PT. G adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://images.unsplash.com/photo-1542744173-05336fcc7ad4?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fEJ1c2luZXNzJTIwQW5hbHlzdHxlbnwwfHwwfHx8MA%3D%3D',
            'salary' => '800000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Ujungberung',
            'category' => 'Data Scientist',

        ],
        [
            'id' => 8,
            'company_name' => 'PT. H',
            'description' => 'PT. H adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1663091633166-20ef12aa7b4e?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Q3liZXJzZWN1cml0eSUyMFNwZWNpYWxpc3R8ZW58MHx8MHx8fDA%3D',
            'salary' => '1000000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Ujungberung',
            'category' => 'Cyber Security',

        ],
        [
            'id' => 9,
            'company_name' => 'PT. I',
            'description' => 'PT. I adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://images.unsplash.com/photo-1542744173-05336fcc7ad4?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fEJ1c2luZXNzJTIwQW5hbHlzdHxlbnwwfHwwfHx8MA%3D%3D',
            'salary' => '800000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Jakarta',
            'category' => 'Cyber Security',

        ],
        [
            'id' => 10,
            'company_name' => 'PT. J',
            'description' => 'PT. J adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://unsplash.com/photos/a-red-security-sign-and-a-blue-security-sign-UA8PwPht1Vw',
            'salary' => '1000000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Tangerang',
            'category' => 'Cyber Security',

        ],
        [
            'id' => 11,
            'company_name' => 'PT. K',
            'description' => 'PT. K adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://images.unsplash.com/photo-1542626991-cbc4e32524cc?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8UHJvamVjdCUyME1hbmFnZXJ8ZW58MHx8MHx8fDA%3D',
            'salary' => '1500000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Nusa Dua',
            'category' => 'Project Manager',

        ],
        [
            'id' => 13,
            'company_name' => 'PT. M',
            'description' => 'PT. M adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1673208564876-57de83aaf1da?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8RmluYW5jZSUyMEFuYWx5c3R8ZW58MHx8MHx8fDA%3D',
            'salary' => '700000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Jakarta',
            'category' => 'Finance Analyst',

        ],
        [
            'id' => 14,
            'company_name' => 'PT. N',
            'description' => 'PT. N adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1661598804060-c8321e472092?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8TWFya2V0aW5nJTIwTWFuYWdlcnxlbnwwfHwwfHx8MA%3D%3D',
            'salary' => '800000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Cilacap',
            'category' => 'Marketing Manager',

        ],
        [
            'id' => 15,
            'company_name' => 'PT. O',
            'description' => 'PT. O adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1661592887150-f71bab8c6c4c?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fE1hcmtldGluZyUyME1hbmFnZXJ8ZW58MHx8MHx8fDA%3D',
            'salary' => '800000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Jakarta',
            'category' => 'Marketing Manager',

            ],
        [
            'id' => 16,
            'company_name' => 'PT. P',
            'description' => 'PT. P adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1661270432378-60507cbf4af0?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8RW50cmVwcmVuZXVyfGVufDB8fDB8fHww',
            'salary' => '800000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Jakarta',
            'category' => 'Entrepreneur',

        ],
        [
            'id' => 17,
            'company_name' => 'PT. Q',
            'description' => 'PT. Q adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi',
            'image' => 'https://plus.unsplash.com/premium_photo-1661488439548-a87936c95700?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8SFIlMjBNYW5hZ2VyfGVufDB8fDB8fHww',
            'salary' => '800000',
            'working_hours' => '9AM to 5PM',
            'location' => 'Jakarta',
            'category' => 'HR Manager',

            ],
        ];

        Job::insert($jobs);
    }
}

