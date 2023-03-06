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
        $img = $this->request->getPost('image');
        
        dd($img);

        $img->move(ROOTPATH . 'public/i/');

        $response = [
            'title' => $title,
            'name' => $name,
            'uploaded_fileinfo' => $img->getClientName()
        ];

        return json_encode($response, true);
    }
}
