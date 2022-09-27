<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use DB;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        $datas = File::all();
        // dd($datas);
        return view('fileUpload', compact('datas'));
    }

    public function fileUploadPost(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        try {
            $file = $request->file;
            $fileName = $file->getClientOriginalName();

            if (DB::table('file_upload')->where('name', $fileName)->doesntExist()) {
                $request->file->move(public_path('uploads'), $fileName);
                DB::table('file_upload')->insert(['name' => $fileName]);
            } else {
                DB::table('file_upload')->where('name', $fileName)->update(['name' => $fileName]);
                $request->file->move(public_path('uploads'), $fileName);
            }
            return back()
                ->with('success', 'You have successfully upload file.')
                ->with('file', $fileName);
        } catch (\Exception $e) { }
    }
}
