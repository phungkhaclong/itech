<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sections::createMany([
            [
                "course_id" => "ccna", 
                "name" => "MODULE 1 - CƠ BẢN HỆ THỐNG MẠNG"
            ],
            [
                "course_id" => "ccna", 
                "name" => "MODULE 2 - TIẾN TRÌNH CHUYỂN MẠCH (SWITCHING)"
            ],
            [
                "course_id" => "ccna",
                "name" => "MODULE 3 - TIẾN TRÌNH ĐỊNH TUYẾN (ROUTING)"
            ],
            [
                "course_id" => "ccna", 
                "name" => "MODULE 4 - NÂNG CAO"
            ],
            [
                "course_id" => "mcsa", 
                "name" => "MODULE 1 - CÀI ĐẶT, CẤU HÌNH VÀ MÔI TRƯỜNG LÀM VIỆC VỚI HỆ THÔNG MÁY CHỦ WINDOWS SERVER 2016"
            ],
            [
                "course_id" => "mcsa", 
                "name" => "MODULE 2 - QUẢN TRỊ HỆ THỐNG MÁY CHỦ WINDOWS SERVER 2016"
            ],
            [
                "course_id" => "mcsa", 
                "name" => "MODULE 3 - CẤU HÌNH DỊCH VỤ NÂNG CAO VỚI WINDOWS SERVER 2016"
            ],
        ]);
    }
}
