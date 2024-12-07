<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    public function login()
    {
        // Menampilkan halaman login
        return view('login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // Load model UserModel
        $userModel = new UserModel();
        
        // Cek apakah username ada di database
        $user = $userModel->where('username', $username)->first();
        
        // Cek kecocokan password
        if ($user) {
            // Jika password cocok (gunakan password_verify jika menggunakan enkripsi)
            if ($password == $user['password']) {  // jika tidak enkripsi
                // Set session login jika berhasil
                session()->set([
                    'isLoggedIn' => true,
                    'username'   => $user['username'],
                    'user_id'    => $user['id'],
                ]);
                return redirect()->to('/dashboard');  // Redirect ke halaman dashboard
            } else {
                // Jika password salah
                session()->setFlashdata('error', 'Username atau Password salah');
                return redirect()->to('login');  // Redirect kembali ke login
            }
        } else {
            // Jika username tidak ditemukan
            session()->setFlashdata('error', 'Username atau Password salah');
            return redirect()->to('login');  // Redirect kembali ke login
        }
    }

    public function logout()
    {
        // Hapus session saat logout
        session()->destroy();
        return redirect()->to('login');  // Redirect ke halaman login
    }
    public function __construct()
{
    helper(['form']);
    session();
}

}
