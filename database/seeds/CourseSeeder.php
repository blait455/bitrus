<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'title' => 'Mathematics',
            'slug'  => 'mathematics',
            'description'   => 'Mathematics is a calculation course'
        ]);
        Course::create([
            'title' => 'English',
            'slug'  => 'english',
            'description'   => 'English is a language course'
        ]);
        Course::create([
            'title' => 'Biology',
            'slug'  => 'biology',
            'description'   => 'Biology is a life course'
        ]);
    }
}
