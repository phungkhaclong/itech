<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'course_id' => 'ccna',
            'name' => 'Giải pháp hạ tầng mạng trong doanh nghiệp (CCNA)',
            'price' => '1500000'
        ]);
        Course::create([
            'course_id' => 'mcsa',
            'name' => 'Giải pháp dịch vụ mạng trong doanh nghiệp (MCSA)',
            'price' => '1500000'
        ]);
        Course::create([
            'course_id' => 'linux',
            'name' => 'Quản trị server Linux',
            'price' => '2500000'
        ]);
        Course::create([
            'course_id' => 'ceh',
            'name' => 'Hacker mũ trắng (CEH)',
            'price' => '2500000'
        ]);
        Course::create([
            'course_id' => 'chfi',
            'name' => 'Chuyên gia điều tra tội phạm mạng (CHFI)',
            'price' => '3000000'
        ]);
        Course::create([
            'course_id' => 'php',
            'name' => 'Lập trình PHP',
            'price' => '1500000'
        ]);
        Course::create([
            'course_id' => 'android',
            'name' => 'Lập trình Android',
            'price' => '2000000'
        ]);
        Course::create([
            'course_id' => 'graphic',
            'name' => 'Thiết kế đồ hoạ',
            'price' => '2500000'
        ]);
    }
}
