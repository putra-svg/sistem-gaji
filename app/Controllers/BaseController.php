<?php


namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        helper('form');
        helper('url');
    }

    // Menyediakan fungsi view yang akan dipakai oleh controller turunan
    public function view($view, $data = [])
    {
        return view('templates/header') . view($view, $data) . view('templates/footer');
    }
}

