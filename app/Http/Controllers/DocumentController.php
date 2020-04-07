<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Hash;
use DB;
use App\Document;
use App\Software;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::latest()->get();
        $softwares = Software::latest()->get();
        return view("admin.documents.index", compact('documents', 'softwares'));
    }

    public function create()
    {
        return view("admin.documents.create");
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'file' => 'mimes:docx,doc',
        ];

        $messages = [
    		'name.required' => 'Tiêu đề không được để trống',
            'file.mimes' => "File không đúng định dạng",
        ];
        
        $validator = validator()->make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
    		return redirect()->back()->with("error", "Thêm không thành công");
    	} else {
            $docPath = $request->file('file')->store('uploads', 'public');
            Document::create([
                'name' => $request->input('name'),
                'file' => $docPath,
            ]);
            return redirect('/admin/documents')->with('success', "Thêm thành công");    
        }
        return redirect('/admin/documents')->with('error', "Thêm không thành công");
    }

    public function destroy($id)
    {
        try {
            Document::find($id)->delete();
            return redirect('/admin/documents')->with("success", "Xoá thành công");
        } catch (\Throwable $th) {
            return redirect('/admin/documents')->with("error", "Xoá không thành công");
        }
    }
}
