<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Home extends BaseController
{
    public function index(): string
    {

        $data = [
            'title'   => 'My title',
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];

        return view('frontend/layout/header')
        . view('frontend/layout/menu')
        . view('frontend/page/home', $data)
        . view('frontend/layout/footer');
    }


 
}
