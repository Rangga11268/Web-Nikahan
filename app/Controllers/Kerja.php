<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kerja extends BaseController
{
    public function index()
    {
        return view('kerja/get');
    }
}
