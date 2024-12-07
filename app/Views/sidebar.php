<div class="sidebar p-3">
    <div class="logo">
        <h4>Sistem Gaji</h4>
    </div>
    <a href="/dashboard" class="sidebar-link"><i class="fas fa-home me-2"></i>Dashboard</a>
    <a href="/departemen" class="sidebar-link"><i class="fas fa-building me-2"></i>Departemen</a>
    <a href="/jabatan" class="sidebar-link"><i class="fas fa-briefcase me-2"></i>Jabatan</a>
    <a href="/karyawan" class="sidebar-link"><i class="fas fa-users me-2"></i>Karyawan</a>
    <a href="/absensi" class="sidebar-link"><i class="fas fa-calendar-check me-2"></i>Absensi</a>
    <a href="/lembur" class="sidebar-link"><i class="fas fa-clock me-2"></i>Lembur</a>
    <a href="/bonus" class="sidebar-link"><i class="fas fa-gift me-2"></i>Bonus</a>
    <a href="/penggajian" class="sidebar-link"><i class="fas fa-money-check-alt me-2"></i>Penggajian</a>
    <a href="/" class="sidebar-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f4f4f9;
        display: flex;
    }

    /* Sidebar Styles */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        height: 100%;
        background: linear-gradient(145deg, #343a40, #495057);
        color: white;
        padding-top: 20px;
        z-index: 1000;
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
        transition: width 0.3s ease, background-color 0.3s ease;
    }

    .sidebar .logo {
        font-size: 26px;
        color: white;
        text-align: center;
        font-weight: bold;
        margin-bottom: 20px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    /* Sidebar Link Styles */
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
        background: rgba(255, 255, 255, 0.05);
    }

    /* Hover and Active Effects */
    .sidebar a:hover, .sidebar a.active {
        background: linear-gradient(145deg, #1e90ff, #007bff);
        box-shadow: 0 4px 8px rgba(30, 144, 255, 0.5);
        transform: scale(1.05);
    }

    .sidebar a i {
        margin-right: 10px;
    }

    /* Active link styling */
    .sidebar a.active {
        background: linear-gradient(145deg, #1e90ff, #007bff);
        color: white;
        box-shadow: 0 4px 15px rgba(30, 144, 255, 0.3);
    }

    /* Sidebar Responsiveness */
    @media (max-width: 768px) {
        .sidebar {
            position: static;
            width: 100%;
            height: auto;
        }
    }
</style>

<script>
    // JavaScript to handle active state
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll(".sidebar a");
        const currentPath = window.location.pathname;

        // Highlight the current page
        links.forEach(link => {
            if (link.getAttribute("href") === currentPath) {
                link.classList.add("active");
            }

            // Add click listener to update the active class
            link.addEventListener("click", () => {
                links.forEach(l => l.classList.remove("active"));
                link.classList.add("active");
            });
        });
    });
</script>
