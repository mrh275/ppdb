<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function dashboard()
    {

        $data = [
            'title'         => 'Dashboard | PPDB SMA Negeri 1 Rawamerta',
            'slug'          => 'dashboard',
            'listMenu'      => $this->menuModel->getMenu(),
            'submenuSlug'   => '',

        ];

        return view('front/admin', $data);
    }
}
