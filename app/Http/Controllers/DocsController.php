<?php

namespace App\Http\Controllers;


class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function docs()
    {

        $filePath = str_replace(  "\app\Http\Controllers\DocsController.php", "", __FILE__);
        $filePath = $filePath . "/resources/views\docs/request-docs/index.html";
        $data = array(
            "url" => $filePath
        );
        return view('docs/request-docs/docs' , $data);


    }
}