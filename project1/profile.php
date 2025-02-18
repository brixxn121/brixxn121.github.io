<?php
$title = "Contact";
include 'inc/header.php'; // Include header
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTFOLIO Profile</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 40px;
            background-color: white;
            border-bottom: 10px solid black;
            flex-wrap: wrap;
        }
        .navbar .logo {
            display: flex;
            align-items: center;
        }
        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
        }
        .navbar .logo span {
            font-size: 28px;
            font-weight: bold;
        }
        .navbar .logo span span {
            color: green;
        }
        .nav-links {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }
        .nav-links a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: green;
        }
        .profile {
            display: flex;
            justify-content: flex-start;
            margin-top: 30px;
            margin-left: 40px;
        }
        .profile img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid #000;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .profile img:hover {
            transform: scale(1.1);
        }
        .profile .username {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .gallery {
            display: flex;
            justify-content: center;
            margin: 40px 0;
            gap: 30px;
            flex-wrap: wrap;
        }
        .gallery img {
            width: 180px;
            height: 220px;
            object-fit: cover;
            border: 3px solid #ccc;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
        .footer {
            height: 80px;
            background-color: black;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .nav-links {
                gap: 20px;
                margin-top: 10px;
            }
            .gallery {
                gap: 20px;
            }
            .gallery img {
                width: 140px;
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="p1 photos/Screenshot 2025-02-13 175224.png" alt="logo">
        </div>
        <div class="nav-links">
            <a href="index.html">HOME</a>
            <a href="profile.html">PROFILE</a>
            <a href="#">FEED</a>
            <a href="home.html">NEWS</a>
        </div>
    </div>

    <div class="profile">
        <img src="p1 photos/profilepic.png" alt="Profile Picture" onclick="alert('Profile picture clicked!')">
        <div class="username">@breedraws</div>
    </div>

    <div class="gallery">
        <img src="p1 photos/bratz 2.jpg" alt="Art 1" onclick="alert('Art 1 clicked!')">
        <img src="p1 photos/bratz.jpg" alt="Art 2" onclick="alert('Art 2 clicked!')">
        <img src="p1 photos/pexel4.jpg" alt="Art 3" onclick="alert('Art 3 clicked!')">
        <img src="p1 photos/fan-art-just-some-cute-starfire-fanart-artist-is-crema-v0-cq3jj4h8jz5a1.webp" alt="Art 4" onclick="alert('Art 4 clicked!')">
    </div>

    <?php include 'inc/footer.php'; ?> <!-- Include footer -->
</body>
</html>
