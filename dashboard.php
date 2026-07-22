<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("config/db.php");



// Total villages
$v = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(*) as total FROM villages"));
$total_villages = $v['total'] ?? 0;

// Total complaints (public only)
$c = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(*) as total FROM complaints WHERE user_type='public'"));
$total_complaints = $c['total'] ?? 0;

// Pending (public)
$p = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(*) as total FROM complaints 
 WHERE status='Pending' AND user_type='public'"));
$pending = $p['total'] ?? 0;

// Resolved (public)
$r = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT COUNT(*) as total FROM complaints 
 WHERE status='Resolved' AND user_type='public'"));
$resolved = $r['total'] ?? 0;

// Latest alerts (public only)
$alerts = mysqli_query($conn, "
SELECT complaints.issue, villages.name 
FROM complaints
JOIN villages ON complaints.village_id = villages.id
WHERE complaints.status='Pending' 
AND complaints.user_type='public'
ORDER BY complaints.id DESC
LIMIT 5
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card-box {
            border-radius: 12px;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .bg-blue { background: #007bff; }
        .bg-red { background: #dc3545; }
        .bg-orange { background: #fd7e14; }
        .bg-green { background: #28a745; }
    </style>
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Smart Village Dashboard</span>

        <div>
            <a href="modules/complaints.php" class="btn btn-warning">Complaints</a>
            <a href="modules/villages.php" class="btn btn-light">Villages</a>

            <!-- 🔥 PUBLIC LOGIN BUTTON -->
            <a href="public/login.php" class="btn btn-success">Public Panel</a>

            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container my-4">

    <h2 class="mb-4">Welcome Admin 👋</h2>

    <!-- STATS -->
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card-box bg-blue">
                <h5>Total Villages</h5>
                <h2><?php echo $total_villages; ?></h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box bg-red">
                <h5>Total Complaints</h5>
                <h2><?php echo $total_complaints; ?></h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box bg-orange">
                <h5>Pending</h5>
                <h2><?php echo $pending; ?></h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box bg-green">
                <h5>Resolved</h5>
                <h2><?php echo $resolved; ?></h2>
            </div>
        </div>

    </div>

    <!-- ALERTS -->
    <div class="card mt-5 shadow">
        <div class="card-body">
            <h4 class="mb-3">🚨 Latest Public Issues</h4>

            <?php if (mysqli_num_rows($alerts) > 0): ?>
                <?php while($a = mysqli_fetch_assoc($alerts)): ?>
                    <div class="alert alert-warning">
                        <strong><?php echo $a['name']; ?>:</strong>
                        <?php echo $a['issue']; ?>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-success">✅ No pending public issues</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- QUICK ACTIONS -->
    <div class="mt-4">
        <h4>Quick Actions</h4>

        <a href="modules/complaints.php" class="btn btn-danger m-1">Manage Complaints</a>
        <a href="modules/villages.php" class="btn btn-primary m-1">View Villages</a>
        <a href="modules/reports.php" class="btn btn-success m-1">Reports</a>
    </div>

</div>

</body>
</html>