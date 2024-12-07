<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Gaji</title>
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #e0e0e0; /* Lighter gray background */
            display: flex;
            color: #333;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background: #495057; /* Darker gray for sidebar */
            color: white;
            padding-top: 20px;
            z-index: 1000;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar .logo {
            font-size: 26px;
            color: white;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
            border-radius: 10px;
            margin: 5px 10px;
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar a:hover, .sidebar a.active {
            background: #6c757d; /* Medium gray hover effect */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }

        .sidebar a i {
            margin-right: 10px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 30px;
            background: #ffffff; /* White background for content */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            flex: 1;
            height: 100vh;
            overflow-y: auto;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid #e0e0e0;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar .nav-link {
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar .nav-link:hover {
            color: #6c757d; /* Medium gray hover effect */
        }

        /* Dashboard Cards */
        .card {
            border: none;
            border-radius: 15px;
            background: #f8f9fa; /* Light gray card background */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            color: #495057; /* Darker gray text */
        }

        .stats {
            font-size: 32px;
            font-weight: bold;
            color: #6c757d; /* Medium gray for stats */
        }

        .icon {
            font-size: 50px;
            color: #6c757d; /* Medium gray for icon */
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            animation: fadeIn 0.8s ease-in-out;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .sidebar {
                position: static;
                width: 100%;
                height: auto;
            }

            .main-content {
                margin-left: 0;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <?= $this->include('sidebar'); ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                </ul>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="container-fluid mt-4">
            <h2 class="fw-bold">Selamat Datang di Sistem Gaji</h2>
            <p class="text-secondary">Halo, putra<strong><?= session()->get('username') ?></strong>. Berikut adalah ringkasan data Anda:</p>

            <div class="row mt-4 g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon me-3">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Total Karyawan</h5>
                                <p class="stats">6</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon me-3">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Total Penggajian</h5>
                                <p class="stats">Rp. 71.500.000</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon me-3">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <div>
                                <h5 class="card-title">Total Lembur</h5>
                                <p class="stats">8,35 Jam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
