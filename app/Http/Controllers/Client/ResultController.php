<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Result;
use App\Classes;
use App\Subject;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::all();
        foreach ($results as $result) {
            $class = Classes::where("class_id", $result->class_id)->first();
            $subject = Subject::where("subject_id", $result->subject_id)->first();
            $result->class_name = $class->name ?? '';
            $result->subject_name = $subject->name ?? '';
        }
        return view("client.student.results", compact('results'));
    }
    
    public function show($id)
    {
        $result = Result::find($id);
        $class = Classes::where("class_id", $result->class_id)->first();
        $subject = Subject::where("subject_id", $result->subject_id)->first();
        $result->class_name = $class->name;
        $result->subject_name = $subject->name;
        return view("client.student.resultDetail", compact('result'));
    }
}
