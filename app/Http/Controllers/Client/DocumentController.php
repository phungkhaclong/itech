<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Document;
use App\Software;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view("client.student.documents", compact('documents'));
    }

    public function downloadDocument($id)
    {
        $download = Document::find($id);
        $filePath = storage_path('app/public/' . $download->file);
        return response()->download($filePath, "$download->name.docx");
    }

    public function softwares()
    {
        $softwares = Software::latest()->get();
        return \view('client.student.softwares', compact('softwares'));
    }
}
