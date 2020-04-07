<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\Exports\StudentExport;
use App\Exports\StudentInClassExport;

class ExcelController extends Controller
{
    public function exportStudentList()
    {
        return Excel::download(new StudentExport, 'DanhSachSinhVien.xlsx');
    }

    public function exportStudentsInClass($classId)
    {
        return (new StudentInClassExport)
            ->forClass($classId)
            ->download('DanhSachSinhVien.xlsx');
    }
}
