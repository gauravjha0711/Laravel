<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/',"upload");
Route::post('/upload', [UploadController::class, 'upload']);





// Route::get('/upload', [UploadController::class, 'showForm'])->name('upload.form');
// Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
// Route::get('/uploads/{filename}', [UploadController::class, 'showFile'])->name('upload.show');
// Route::delete('/uploads/{filename}', [UploadController::class, 'deleteFile'])->name('upload.delete');
// Route::get('/uploads', function () {
//     $files = \Storage::files('uploads');
//     return view('uploads.index', compact('files'));
// })->name('uploads.index');
// Route::get('/uploads/{filename}/download', function ($filename) {
//     $path = storage_path('app/uploads/' . $filename);

//     if (!file_exists($path)) {
//         abort(404);
//     }

//     return response()->download($path);
// })->name('uploads.download');