<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Teori'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Web Teori'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Web Teori',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jalan magelang',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jalan magelang',
                    'kota' => 'Yogyakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
