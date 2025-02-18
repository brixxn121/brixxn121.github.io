<?php
    $title = "Home";
    include 'inc/header.php';
?>
<p>Page content goes here</p>
<?php include 'inc/footer.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ArtFolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Lato', sans-serif; margin: 0; padding: 0; background-color: black; color: white; transition: background-color 0.5s, color 0.5s; }
    header, footer { background: #fff; color: black; padding: 20px; text-align: left; display: flex; justify-content: space-between; align-items: center; transition: background-color 0.5s, color 0.5s; }
    nav { display: flex; gap: 30px; }
    nav a { text-decoration: none; color: black; font-weight: bold; transition: color 0.5s; }
    .header-right { display: flex; gap: 20px; align-items: center; }
    .hero { display: flex; background-color: #7f1d1d; color: white; padding: 40px; align-items: center; justify-content: space-between; }
    .hero-text { max-width: 50%; text-align: center; }
    .hero h1 { font-size: 36px; margin: 0; }
    .hero p { font-size: 18px; margin: 20px 0; }
    .hero a { color: white; text-decoration: underline; font-size: 20px; }
    .hero img { max-width: 45%; height: auto; }
    .content { display: flex; justify-content: space-around; padding: 20px; background-color: white; color: black; transition: background-color 0.5s, color 0.5s; }
    .card { width: 30%; text-align: center; }
    .card img { width: 100%; height: auto; margin-bottom: 10px; }
    .card h3 { font-size: 16px; font-weight: bold; }
    .card p { font-size: 14px; margin: 10px 0; }
    .card a { font-weight: bold; text-decoration: none; color: black; }
    footer p { margin: 0; }
    .dark-mode { background-color: white; color: black; }
    .dark-mode header, .dark-mode footer, .dark-mode .content { background-color: black; color: white; }
    .dark-mode nav a { color: white; }
    h1 span { background-color: green; padding: 0 5px; }
    .logo-img { width: 62px; height: 62px; margin-right: 10px; }
    @media (max-width: 1200px) {
      .hero-text { max-width: 60%; }
      .hero h1 { font-size: 28px; }
      .hero p { font-size: 16px; }
      .hero img { max-width: 40%; }
    }

    @media (max-width: 992px) {
      nav { flex-direction: column; align-items: center; gap: 15px; }
      .hero { flex-direction: column; text-align: center; padding: 30px; }
      .hero-text { max-width: 80%; }
      .hero img { max-width: 70%; }
      .content { flex-direction: column; align-items: center; }
      .card { width: 80%; margin-bottom: 20px; }
    }

    @media (max-width: 600px) {
      header, footer { padding: 15px; flex-direction: column; align-items: center; text-align: center; }
      .logo-img { width: 50px; height: 50px; }
      .hero h1 { font-size: 22px; }
      .hero p { font-size: 14px; }
      .hero img { max-width: 90%; }
      .card h3 { font-size: 14px; }
      .card p { font-size: 12px; }
      .card a { font-size: 14px; }
    }
  </style>
</head>
<body>
  <header>
    <div style="display: flex; align-items: center;">
      <img src="p1 photos/image 1.png" alt="Logo" class="logo-img" />
      <h1>ART<span>FOLIO</span></h1>
    </div>
    <nav>
      <a href="index.html">HOME</a>
      <a href="profile.html">PROFILE</a>
      <a href="explore.html">FEED</a>
      <a href="home.html">NEWS</a>
    </nav>
    <div class="header-right">
      <a href="#" style="font-weight: bold; text-decoration: none; color: black;">LOG OUT</a>
      <button onclick="toggleDarkMode()" style="font-weight: bold; background:none; border:none; cursor:pointer;">TOGGLE MODE</button>
    </div>
  </header>

  <div class="hero">
    <div class="hero-text">
      <h1>TOP 10 WAYS TO IMPROVE YOUR ART<br>As Explained by Professionals</h1>
      <p>Improving your art is a continuous journey that requires practice, patience, and a willingness to learn. Whether you're a beginner or an experienced artist, here are 10 professional tips to help elevate your skills.</p>
      <a href="#">CLICK TO READ MORE</a>
    </div>
    <img src="p1%20photos/Screenshot%202025-02-13%20175306.png" alt="Hero Image">
  </div>

  <div class="content">
    <div class="card">
      <img src="p1 photos/pol.jpg" alt="Polish Poster Art">
      <h3>"Polish Poster Art: A Unique Blend of Creativity and Culture"</h3>
      <p>Discover the captivating world of Polish poster art, renowned for its bold visuals, striking designs, and deep cultural influences.</p>
      <a href="#">CLICK TO READ MORE</a>
    </div>
    <div class="card">
      <img src="p1 photos/gojo.jpg" alt="Fan Art Impact">
      <h3>"The Impact of Fan Art: Redefining Creativity and Community"</h3>
      <p>From reimagining beloved characters to creating entirely new worlds, fan art bridges the gap between creators and fans.</p>
      <a href="#">CLICK TO READ MORE</a>
    </div>
    <div class="card">
      <img src="p1 photos/pexels-steve-1690351.jpg" alt="More News">
      <h3>CLICK HERE TO READ MORE NEWS</h3>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 ArtFolio</p>
  </footer>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
    }
  </script>
</body>
</html>
