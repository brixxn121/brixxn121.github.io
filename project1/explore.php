<?php
    $title = "Contact";
    include 'inc/header.php';
?>

<div class="gallery">
    <img src="p1 photos/images (3).jpg" alt="Art 1">
    <img src="p1 photos/bratz.jpg" alt="Art 2">
    <img src="p1 photos/bratz 2.jpg" alt="Art 3">
    <img src="p1 photos/pexels-andrew-2123337.jpg" alt="Art 4">
    <img src="p1 photos/images.jpg" alt="Art 5">
    <img src="p1 photos/pexel4.jpg" alt="Art 6">
    <img src="p1 photos/pexels-pixabay-326612.jpg" alt="Art 7">
    <img src="p1 photos/pexels-andrew-2123337.jpg" alt="Art 8">
</div>

<?php include 'inc/footer.php'; ?>

// inc/header.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="p1 photos/Screenshot 2025-02-13 175224.png" alt="logo">
    </div>
    <div class="nav-links">
        <a href="#">HOME</a>
        <a href="#">GALLERY</a>
        <a href="#">ABOUT</a>
        <a href="#">CONTACT</a>
    </div>
    <button class="theme-toggle" id="themeToggle"></button>
</div>

// inc/footer.php
<div class="footer"></div>
</body>
</html>

// JavaScript for theme toggle
<script>
    const themeToggleButton = document.getElementById('themeToggle');
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark');
    }

    themeToggleButton.addEventListener('click', () => {
        document.body.classList.toggle('dark');
        localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
    });
</script>
