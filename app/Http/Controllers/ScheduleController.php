<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Hash;
use DB;
use App\Schedule;    

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view("admin.schedules.index", compact('schedules'));
    }

    public function create()
    {
        return view("admin.schedules.create");
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            // 'file' => 'mimes:xlsx,xls',
        ];

        $messages = [
    		'name.required' => 'Tiêu đề không được để trống',
            // 'file.mimes' => "File không đúng định dạng",
        ];
        
        $validator = validator()->make($request->all(), $rules, $messages);
        // dd($validator);
        
        if ($validator->fails()) {
            // dd($validator);
    		return redirect()->back()->withErrors($validator);
    	} else {
            $docPath = $request->file('file')->store('uploads', 'public');
            Schedule::create([
                'name' => $request->input('name'),
                'file' => $docPath,
            ]);
            return redirect('/admin/schedules')->with('success', "Thêm thành công");    
        }
        return redirect('/admin/schedules')->with('error', "Thêm không thành công");
    }

    public function destroy($id)
    {
        try {
            Schedule::find($id)->delete();
            return redirect('/admin/schedules')->with("success", "Xoá thành công");
        } catch (\Throwable $th) {
            return redirect('/admin/schedules')->with("error", "Xoá không thành công");
        }
    }
}
