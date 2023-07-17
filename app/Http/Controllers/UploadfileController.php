<?php

namespace App\Http\Controllers;

use App\Models\Uploadfile;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UploadfileController extends Controller
{
    public function imageStore(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image_path = $request->file('image')->store('image', 'public');

        $data = Uploadfile::create([
            'image' => $image_path,
        ]);

        return response($data, Response::HTTP_CREATED);
    }
}
