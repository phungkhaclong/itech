<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sale;
use App\Course;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SaleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
  {
      $sales = DB::table('sales')->get();
      // foreach ($sales as $item) {
      //   $course = Course::where("course_id", $item->course_id)->first();
      //   // dd($course);
      //   // $item->course_name = $course->name;
      // }
      // $courses = 
      return view('admin/sales/index', [
          'sales' => $sales
      ]);
  }
  public function create()
    {
      $courses = Course::all();
      return view('admin/sales/create', compact('courses'));
    }

    public function store(Request $request)
    {
      $rules = [
        'course_id' => 'required|regex:/^[a-z0-9-]+$/i|unique:sales',
        'price' => 'required',
        'from_date' => 'required|after:yesterday',
        'to_date' => 'required|after:from_date'
      ];
      
      $messages = [
        'course_id.regex' => "Tên ưu đãi không được để trống và chỉ được chứ những kí tự a-z, 0-9 và '-'",
        'course_id.unique' => "Chương trình ưu đãi đã tồn tại",
        'price.required' => "Giá ưu đãi không được để trống",
        'from_date.required' => 'Không được để trống',
        'from_date.after' => "Ngày bắt đầu phải lớn hơn hoặc bằng ngày hôm nay",
        'to_date.required' => 'Không được để trống',
        'to_date.after' => "Ngày kết thúc ưu đãi phải lớn hơn ngày bắt đầu chương trình ưu đãi"
      ];
      
      $validator = validator()->make($request->all(), $rules, $messages);
      
      if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput(); 
    	} else {
            Sale::create($request->all());
            return redirect('/admin/sales')->with('success', "Thêm ưu đãi thành công");    
          }
          return redirect('/admin/sales')->with('error', "Thêm ưu đãi không thành công");    
    }
    public function edit($id)
    {
      // dd($id);
      $sale = Sale::where('id',$id)->first();
      $courses = Course::all();
      // dd($courses);
      return view('admin/sales/edit', compact('courses', 'sale'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'course_id' => 'required',
            'price' => 'required',
            'from_date' => 'required',
            'to_date' => 'required'
        ];
        $messages = [
            'course_id.required' => 'Không được để trống',
            'price.required' => 'Không được để trống',
            'from_date.required' => 'Không được để trống',
            'to_date.required' => 'Không được để trốngc',
        ];
        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Sale::where("id", $id)->update([
                'course_id' => $request->input('course_id'),
                'price' => $request->input('price'),
                'from_date' => $request->input('from_date'),
                'to_date' => $request->input('to_date')
            ]);
            return redirect('/admin/sales')->with('success',"Cập nhập ưu đãi thành công");
        }
        return redirect('/admin/sales')->with('error', "Cập nhập ưu đãi không thành công");
    }

    public function destroy($id)
    {
        try {
            $sales = Sale::where("id", $id)->first();
            $sales->delete();
            return redirect('/admin/sales')->with('success', "Xoá thành công");
        } catch (\Throwable $th) {
            return redirect('/admin/sales')->with('error', "Xoá không thành công");
        }
    }

}
