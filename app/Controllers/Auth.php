<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Auth extends BaseController
{
    public function signin(): string
    {

        $data = [
            'title'   => 'My title',
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];

        return view('frontend/layout/header')
        . view('frontend/layout/menu')
        . view('frontend/auth/signin', $data)
        . view('frontend/layout/footer');
    }

    public function signup(): string
    {

        $data = [
            'title'   => 'My title',
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];

        return view('frontend/layout/header')
        . view('frontend/layout/menu')
        . view('frontend/auth/signup', $data)
        . view('frontend/layout/footer');
    }

    public function payonlineusingregno(): string
    {

        $data = [
            'title'   => 'My title',
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];

        return view('frontend/layout/header')
        . view('frontend/layout/menu')
        . view('frontend/auth/Payonline_using_reg_no', $data)
        . view('frontend/layout/footer');
    }

    public function checkpaymentstatus(): string
    {

        $data = [
            'title'   => 'My title',
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];

        return view('frontend/layout/header')
        . view('frontend/layout/menu')
        . view('frontend/auth/checkpaymentstatus', $data)
        . view('frontend/layout/footer');
    }



    
}
