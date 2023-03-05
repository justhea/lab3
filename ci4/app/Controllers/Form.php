<?php

namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Files\File;
use App\Controllers\BaseController;
use App\Models\News as News;

class Form extends BaseController
{
    public function index($page = 'form')
    {
        return view('templates/header', [
                'title' => ucfirst($page)
            ])
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function add()
    {
        $request = service('request');

        $title = $request->getPost('title');
        $name = $request->getPost('name');

        $img = $this->request->getFile('news_image');

        dd($img);

        $img->move(ROOTPATH . 'public/i/');

        $response = [
            'title' => $title,
            'name' => $name,
            'uploaded_fileinfo' => $img->getClientName()
        ];

        dd($response);
    }
}
