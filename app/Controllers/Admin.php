<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function dashboard()
    {

        $data = [
            'title'     => 'Dashboard | PPDB SMA Negeri 1 Rawamerta',
            'webpage'   => 'dashboard',
        ];

        return view('front/admin', $data);
    }
}
