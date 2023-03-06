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

        $post = $this->request->getPost(['name', 'title', 'image']);
        $model = model(News::class);

        $model->save([
            'name'  => $post['name'],
            'title'  => $post['title'],
            'image'  => $post['image'],
        ]);
        echo "<div class='alert alert-success'>Form submitted successfully!</div>";
    }
}
