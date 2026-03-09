<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index()
    {
        dump(send_mail(
            ['test@mail.com'],
            'Test 1',
            'mail/test',
            ['name' => 'Jon', 'age' => 35],
            [WWW . '/img/Polyakov.jpeg']
        ));
        return view('contact/index', [
            'title' => 'Contact page'
        ]);
    }
}
