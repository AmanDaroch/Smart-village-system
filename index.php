<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Village System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .btn-custom {
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 500;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Smart Village</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <span class="nav-link active">Home</span>
                </li>
                <!-- registration -->

                <li class="nav-item">
                    <a class="nav-link btn btn-success btn-custom text-white ms-2" href="public/registration.php">
                        Registration

                    </a>
                </li>

                <!-- Public -->
                <li class="nav-item">
                    <a class="nav-link btn btn-success btn-custom text-white ms-2" href="public/login.php">
                        Public Complaint
                    </a>
                </li>

                

                <!-- Admin -->
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-custom text-white ms-2" href="login.php">
                        Admin Login
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="text-center text-white"
style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/village 2.png'); background-size: cover; padding: 100px 20px;">

    <div class="container">
        <h1 class="fw-bold">Smart Village Development System</h1>
        <p class="mt-3">Monitor & Improve Rural Development Efficiently</p>

        <!-- Buttons -->
        <div class="mt-4">

            <a href="public/login.php" class="btn btn-success btn-lg btn-custom me-2">
                Public Complaint
            </a>

            <a href="login.php" class="btn btn-primary btn-lg btn-custom">
                Admin Login
            </a>

        </div>
    </div>
</section>

<!-- Modules Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">System Modules</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/images/education 2.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Education</h5>
                    <p>Manage schools, students & teachers</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/images/healthcare 2.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Healthcare</h5>
                    <p>Hospitals & doctors</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/images/infrastructure 2.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Infrastructure</h5>
                    <p>Roads, water & electricity</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/images/transport 2.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Transport</h5>
                    <p>Bus & connectivity</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/images/shops.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Economy</h5>
                    <p>Shops & employment data</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="assets/images/reports.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Reports</h5>
                    <p>Village development analysis</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-3">
    © 2026 Smart Village Development System
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>