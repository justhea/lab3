<?php

namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Files\File;
use App\Controllers\BaseController;
use App\Models\News as News;

class Form extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        return view('templates/header', [
                'title' => ucfirst("Upload")
            ])
            . view('pages/form')
            . view('templates/footer');
    }

    public function add()
    {
        helper(['form', 'url']);

        $request = service('request');
        $title = $request->getPost('title');
        $name = $request->getPost('name');
        $img = $request->getPost('image');

        $response->save([
            'title' => $title,
            'name' => $name,
            'image' => $img
        ]);

        return view('templates/header')
            . view('pages/load')
            . view('templates/footer');
    }
}
