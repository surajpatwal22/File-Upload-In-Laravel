<?php

namespace App\Http\Controllers;

use App\Models\fileupload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
   public function fileUpload(Request $request)
   {

      $validator = Validator::make($request->all(), [
         'file' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
      ]);
      if ($validator->fails()) {
         $errors = $validator->errors();
         return response($errors);
      } else {
         if ($request->file) {
            $file = $request->file("file");
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file_mime = $file->getMimeType();
            $size = $file->getSize();


            $file->move(base_path() . '/public/uploads/', $filename);

            $uploadedFile = new fileupload([
               'filename' => $filename,
               'extension' => $extension,
               'mime_type' => $file_mime,
               'size' => $size,
               
            ]);
   
            $uploadedFile->save();


            return response()->json([
               "success" => true,
               "message" => "File uploaded successfully",
               "name" => $filename
            ]);
         }
      }
   }
}
