<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;

class StudentInClassExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function forClass(string $classId)
    {
        $this->classId = $classId;
        return $this;
    }

    public function query()
    {
        return User::query()
            ->join("student_classes", "users.student_id", "=", "student_classes.student_id")
            ->where('student_classes.class_id', $this->classId)
            ->select("users.student_id", "users.name", "gender", "birthday", "address", "phone");
    }

    public function map($student): array
    {
        return [
            $student->student_id,
            $student->name,
            $student->gender = $student->gender == 1 ? "Nữ" : "Nam",
            $student->birthday,
            $student->address,
            $student->phone,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Họ và tên',
            'Giới tính',
            'Ngày sinh',
            'Địa chỉ',
            'Điện thoại',
        ];
    }
}
