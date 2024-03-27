<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucketlister</title>
    <link rel="stylesheet" href="../views/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <?php //if (isset($_SESSION['user_id'])): ?>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/items">Bucketlist</a></li>
                <li><a href="/logout">Logout</a></li>
            <?php //else: ?>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
             <?php //endif; ?>
        </ul>
    </nav>
