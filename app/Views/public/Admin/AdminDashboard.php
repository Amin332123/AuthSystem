<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../app/Views/public_assets/css/user.css">


</head>
<body>

    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <div class="dashboard-container">
        <div class="welcome-text">Welcome Admin</div>
        <div class="user-name"><?php echo $_SESSION['username']; ?></div>
    </div>

</body>
</html>