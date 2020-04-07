<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\News;

class NewsController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
    }

    protected function getTypes() {
        return [
            'tin-noi-bo' => 'Tin nội bộ',
            'tin-cong-nghe' => 'Tin công nghệ',
            'su-kien' => 'Sự kiện',
            'tuyen-sinh' => "Tin tuyển sinh",
            'ky-su-nhat-ban' => "kỹ sư nhật bản",
            'thuc-tap-nhat-ban' => "Thực tập nhật bản",
            'du-hoc-han-quoc' => "du học hàn quốc"
        ];
    }

    public function index() {
        $types = $this->getTypes();
        $news = News::all();
        return view('admin/news/index', compact('news', 'types'));
    }

    public function create() {
        $types = $this->getTypes();
        return view('admin/news/create', compact('types'));
    }

    public function store(Request $request) {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
            'content' => 'required',
            'type' => 'required',
        ];

        $messages = [
    		'title.required' => 'Tiêu đề không được để trống',
    		'description.required' => 'Yêu cầu nhập mô tả',
            'image.image' => "Ảnh không đúng định dạng",
            'content.required' => 'Nội dung tin không được để trống',
            'type.required' => 'Thể loại tin tức không được để trống',
        ];
        
        $validator = validator()->make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
            $imagePath = $request->file('image')->store('uploads', 'public');
            News::create([
                'title' => $request->input('title'),
                'slug' => Str::slug($request->input('title'), '-'),
                'description' => $request->input('description'),
                'image' => $imagePath,
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'type' => $request->input('type'),
            ]);
            return redirect('/admin/news')->with('success', "Thêm tin tức thành công");    
        }
        return redirect('/admin/news')->with('error', "Thêm tin tức không thành công");
    }

    public function edit($id) {
        $types = $this->getTypes();
        $news = News::findOrFail($id);
        return view('admin/news/edit', compact('news', 'types'));
    }

    public function update(Request $request, $id) {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'type' => 'required',
        ];
        $messages = [
    		'title.required' => 'Tiêu đề không được để trống',
    		'description.required' => 'Mô tả không được để trống',
            'content.required' => 'Nội dung tin không được để trống',
            'type.required' => 'Thể loại tin tức không được để trống',
    	];
        $validator = validator()->make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {

        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }
            $imagePath = News::find($id)->image;

            News::where("id", $id)->update([
                'title' => $request->input('title'),
                'slug' => Str::slug($request->input('title'), "-"),
                'description' => $request->input('description'),
                'image' => $imagePath,
                'content' => $request->input('content'),
                'type' => $request->input('type'),
            ]);
            return redirect('/admin/news')->with('success', "Sửa tin tức thành công");    
        }
        return redirect('/admin/news')->with('error', "Sửa tin tức không thành công");
    }

    public function destroy($id) {
        try {
            $news = News::findOrFail($id);
            $news->delete();
            return \redirect('/admin/news')->with("success", "Xoá tin thành công");
        } catch (\Throwable $th) {
            return \redirect('/admin/news')->with("error", "Xoá tin không thành công");
        }
    }
}
