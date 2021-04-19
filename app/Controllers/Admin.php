<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function dashboard()
    {

        $data = [
            'title'     => 'Dashboard | PPDB SMA Negeri 1 Rawamerta',
        ];

        return view('front/admin', $data);
    }
}
