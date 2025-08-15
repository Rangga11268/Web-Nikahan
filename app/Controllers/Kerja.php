<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kerja extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kerja');
        $query = $builder->get()->getResult();
        return view('kerja/get', compact('query'));
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }
}
