<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kerja extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kerja');
        $query = $builder->get()->getResult();
        return view('kerja/get', compact('query'));
    }

    public function create()
    {
        return view('kerja/add');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('kerja')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to('kerja')->with('success', 'Data berhasil disimpan!');
        }
    }
}
