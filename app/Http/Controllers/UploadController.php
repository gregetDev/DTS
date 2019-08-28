<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function index()
    {
        $Image = DB::table('images')
        ->paginate(10);
        return view('home.galery', ['Image' => $Image]);

    }
    public function create()
    {
        return view('admin.galery.dragdrop');

    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            try {
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move(public_path('uploads'), $fileName);
                // set data
                $image = new Image;
                $image->filename = $fileName;
                $image->save();

                return response()->json([
                    'success' => true,
                    'message' => 'Upload Successful',
                    'url' => URL::to('uploads') . '/' . $fileName
                ]);
            } catch (Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Upload failed'
                ]);
            }
        }
    }
    public function destroy(Image $image)
    {
        Image::find($image->id)->delete();

        return redirect('/artikel');
    }
    public function delete(Image $image)
    {

        return view('/admin/galery/delete');
    }
}
