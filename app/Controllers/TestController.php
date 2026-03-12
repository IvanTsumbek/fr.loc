<?php

namespace App\Controllers;

use PHPFramework\File;

class TestController extends BaseController
{
    public function index()
    {
        return view('test/index', [
            'title' => 'Test page'
        ]);
    }

    public function send()
    {
       $file = new File('my-file');
       $file->save();
    }


}
