<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //

    // public function upload(){
    //     echo "File Uploaded sucessfully";
    // }

    public function upload(Request $request){

        $path = $request->file('file')->store('images', 'public');
        $fileArray = explode('/', $path); // explode Convert string to array
        $filename = $fileArray[1];
        return view('displayimage', ['path' => 'images/' . $filename]);

    }




    // public function upload(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'file' => 'required|file|mimes:jpg,png,jpeg|max:2048',
    //     ]);

    //     // Store the file
    //     $path = $request->file('file')->store('uploads');

    //     // Return a response
    //     return response()->json(['path' => $path], 200);
    // }
    // public function showForm()
    // {
    //     return view('upload');
    // }
    // public function showFile($filename)
    // {
    //     $path = storage_path('app/uploads/' . $filename);

    //     if (!file_exists($path)) {
    //         abort(404);
    //     }

    //     return response()->file($path);
    // }
    // public function deleteFile($filename)
    // {
    //     $path = storage_path('app/uploads/' . $filename);

    //     if (file_exists($path)) {
    //         unlink($path);
    //         return response()->json(['message' => 'File deleted successfully'], 200);
    //     }

    //     return response()->json(['message' => 'File not found'], 404);
    // }
}
