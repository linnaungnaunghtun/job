<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses =[ [
            'id' => 1,
            'instructor_name' => 'PT. A',
            'name' => 'Programming',
            'description' => 'Programming is a skill that allows you to create software and applications using programming languages like Python, Java, C++, and more.',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Software Engineer',
        ],
        [
            'id' => 2,
            'instructor_name' => 'PT. B',
            'name' => 'Marketing',
            'description' => 'Marketing is a skill that allows you to create software and applications using programming languages like Python, Java, C++, and more.',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Marketing Manager',
        ],
        [
            'id' => 3,
            'instructor_name' => 'PT. C',
            'name' => 'HR',
            'description' => 'HR is a skill that allows you to create software and applications using programming languages like Python, Java, C++, and more.',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'HR Manager',
        ],
        [
            'id' => 4,
            'instructor_name' => 'PT. D',
            'name' => 'Security',
            'description' => 'Security is a skill that allows you to create software and applications using programming languages like Python, Java, C++, and more.',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Cybersecurity Specialist',
        ],
        [
            'id' => 5,
            'instructor_name' => 'PT. E',
            'name' => 'Data Science',
            'description' => 'Data Science is a skill that allows you to create software and applications using programming',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Data Scientist',
        ],
        [
            'id' => 6,
            'instructor_name' => 'PT. F',
            'name' => 'Network Engineer',
            'description' => 'Network Engineer is a skill that allows you to create software and applications using programming',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Network Engineer',
        ],
        [
            'id' => 7,
            'instructor_name' => 'PT. G',
            'name' => 'Entrepreneur',
            'description' => 'Entrepreneur is a skill that allows you to create software and applications using programming',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Entrepreneur',
        ],
        [
            'id' => 8,
            'instructor_name' => 'PT. H',
            'name' => 'Business Development',
            'description' => 'Business Development is a skill that allows you to create software and applications using programming',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Business Analyst',
        ],
        [
            'id' => 9,
            'instructor_name' => 'PT. I',
            'name' => 'Data Analyst',
            'description' => 'Data Analyst is a skill that allows you to create software and applications using programming',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Data Scientist',
        ],
        [
            'id' => 10,
            'instructor_name' => 'PT. J',
            'name' => 'Finance Analyst',
            'description' => 'Finance Analyst is a skill that allows you to create software and applications using programming',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Finance Analyst',
        ],
        [
            'id' => 11,
            'instructor_name' => 'PT. K',
            'name' => 'Marketing Manager',
            'description' => 'Marketing Manager is a skill that allows you to create software and applications using programming',
            'image' => 'https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mdHdhcmUlMjBkZXZlbG9wZXJ8ZW58MHx8MHx8fDA%3D',
            'price' => '500',
            'category' => 'Marketing Manager',
        ],


        ];

        Course::insert($courses);
    }
}
