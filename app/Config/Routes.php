<?php

namespace Config;

use App\Controllers\Home;
use App\Controllers\User;
use App\Controllers\Departemen;
use App\Controllers\Jabatan;
use App\Controllers\Karyawan;
use App\Controllers\Absensi;
use App\Controllers\Lembur;
use App\Controllers\Bonus;
use App\Controllers\Penggajian;

$routes->get('/', 'User::login');  // Halaman login
$routes->post('/user/authenticate', 'User::authenticate');  // Proses login
$routes->get('/user/logout', 'User::logout');  // Proses logout

// Dashboard Route
$routes->get('/dashboard', 'Home::index');

// CRUD Departemen
$routes->get('/departemen', 'Departemen::index');
$routes->get('/departemen/create', 'Departemen::create');
$routes->post('/departemen/store', 'Departemen::store');
$routes->get('/departemen/edit/(:num)', 'Departemen::edit/$1');
$routes->post('/departemen/update/(:num)', 'Departemen::update/$1');
$routes->get('/departemen/delete/(:num)', 'Departemen::delete/$1');

// Routes for Jabatan
$routes->get('/jabatan', 'Jabatan::index');  // Menampilkan list jabatan
$routes->get('/jabatan/create', 'Jabatan::create');  // Menampilkan form tambah jabatan
$routes->post('/jabatan/store', 'Jabatan::store');  // Proses simpan jabatan
$routes->get('/jabatan/edit/(:num)', 'Jabatan::edit/$1');  // Form edit jabatan
$routes->post('/jabatan/update/(:num)', 'Jabatan::update/$1');  // Proses update jabatan
$routes->get('/jabatan/delete/(:num)', 'Jabatan::delete/$1');  // Hapus jabatan


// Route untuk menu CRUD Karyawan
$routes->get('/karyawan', 'Karyawan::index');
$routes->get('/karyawan/create', 'Karyawan::create');
$routes->post('/karyawan/store', 'Karyawan::store');
$routes->get('/karyawan/edit/(:num)', 'Karyawan::edit/$1');
$routes->post('/karyawan/update/(:num)', 'Karyawan::update/$1');
$routes->get('/karyawan/delete/(:num)', 'Karyawan::delete/$1');

// CRUD Absensi
$routes->get('/absensi', 'Absensi::index');
$routes->get('/absensi/create', 'Absensi::create');
$routes->post('/absensi/store', 'Absensi::store');
$routes->get('/absensi/edit/(:num)', 'Absensi::edit/$1');
$routes->post('/absensi/update/(:num)', 'Absensi::update/$1');
$routes->get('/absensi/delete/(:num)', 'Absensi::delete/$1');

// CRUD Lembur
$routes->get('/lembur', 'Lembur::index');
$routes->get('/lembur/create', 'Lembur::create');
$routes->post('/lembur/store', 'Lembur::store');
$routes->get('/lembur/edit/(:num)', 'Lembur::edit/$1');
$routes->post('/lembur/update/(:num)', 'Lembur::update/$1');
$routes->get('/lembur/delete/(:num)', 'Lembur::delete/$1');

// CRUD Bonus
$routes->get('/bonus', 'Bonus::index');
$routes->get('/bonus/create', 'Bonus::create');
$routes->post('/bonus/store', 'Bonus::store');
$routes->get('/bonus/edit/(:num)', 'Bonus::edit/$1');
$routes->post('/bonus/update/(:num)', 'Bonus::update/$1');
$routes->get('/bonus/delete/(:num)', 'Bonus::delete/$1');

// CRUD Penggajian
$routes->get('/penggajian', 'Penggajian::index');
$routes->get('/penggajian/create', 'Penggajian::create');
$routes->post('/penggajian/store', 'Penggajian::store');
$routes->get('/penggajian/edit/(:num)', 'Penggajian::edit/$1');
$routes->post('/penggajian/update/(:num)', 'Penggajian::update/$1');
$routes->get('/penggajian/delete/(:num)', 'Penggajian::delete/$1');
