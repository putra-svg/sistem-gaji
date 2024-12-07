<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        // Cek apakah user sudah login
        if (session()->get('logged_in')) {
            // Jika login, tampilkan halaman dashboard
            return view('dashboard');  // Halaman dashboard
        } else {
            // Jika belum login, redirect ke halaman login
            return redirect()->to('/');
        }
    }
}
