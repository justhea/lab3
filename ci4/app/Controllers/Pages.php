<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line
use App\Models\News as News;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        /*
            1. Create table using migration, dont create table directly

            php spark make:migration create_news_table --table=cpbustamante_news

                1.1 Run migration
                
                php spark migrate

            2. Make model para naka connect sa table (singular)

            php spark make:model News --table=cpbustamante_news

            3. Query
        */

        $newsModel = new News();
        $news = $newsModel->findAll();
        
        // dd($news);

        return view('templates/header', $data)
            . view('pages/' . $page, [
                'news' => $news
            ])
            . view('templates/footer');
    }
}