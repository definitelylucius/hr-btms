<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function upload(Request $request) {
        $request->validate([
            'file' => 'required|file|max:10240', // Limit file size to 10MB
        ]);
    
        if ($request->file('file')->isValid()) {
            $path = $request->file('file')->store('uploads');
            return response()->json(['message' => 'File uploaded successfully', 'path' => $path], 200);
        }
    
        return response()->json(['message' => 'File upload failed'], 400);
    }
}
