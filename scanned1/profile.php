<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webpage Design</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Quicksand:wght@600&family=Red+Hat+Display:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav>
      <div class="nav--section">
        <div id="logo">
          <img class="logo--img" src="images/logo1.png" />
        </div>
        <ul class="nav--links">
          <li><a class="nav--link" href="landinghome.html">Home</a></li>
          <li><a class="nav--link" href="api.html">Maps</a></li>
          <li><a class="nav--link" href="leaderboard.php">Leaderboard</a></li>
          <li><a class="nav--link" href="profile.html">Profile</a></li>
          <li><a class="nav--link" href="scan.php">Scanned Items</a></li>
          <li><a class="nav--link" href="faq.php">FAQs</a></li>
        </ul>
      </div>
      <div class="overlay" id="myNav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;</a>
        <div class="overlay-content">
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Clients</a>
          <a href="#">Contact</a>
        </div>
      </div>
      <span class="openbtn" onclick="openNav()">☰</span>
    </nav>
    <body>
    <section class="already-scanned">
      <h2>User Profile</h2>
    </section>
<h1>Name: John Holden </h1>
<img src='images/john.jpeg' height='100' width='100'/>

<h2>Day Streak</h2>
<p>Monday</b> Tuesday Wedneseday <b>Thursday</b>Friday<b> Saturday Sunday</b></p>







</html>
    <section class="footer">
      <div class="sign-in">
        <button onclick="window.location.href='login.html';">Sign In</button>
      </div>
      <div id="logo">
        <img class="logo--img" src="images/logo1.png" />
      </div>
      <div class="sitemap">
        <ul class="sitemap--links--left">
          <li><a href="scan.php">Scanned Items</a></li>
          <li><a href="api.html">Maps</a></li>
          <li><a href="leaderboard.php">Leaderboard</a></li>
        </ul>
        <ul class="sitemap--links--right">
          <li><a href="profile.html">Profile</a></li>
          <li><a href="faq.php">FAQs</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
      <div class="social">
        <ul class="social--links">
          <li>
            <img class="social--icons" src="images/fb_social media_icon.svg" />
          </li>
          <li>
            <img class="social--icons" src="images/instagram logo_icon.svg" />
          </li>
          <li>
            <img class="social--icons" src="images/twitter logo_icon.svg" />
          </li>
        </ul>
      </div>
      <div class="appendix">
        <ul class="appendix--links">
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Terms of Service</a></li>
        </ul>
        <ul class="appendix--links">
          <li><a href="#">Cookies</a></li>
        </ul>
      </div>
      <div class="search">
        <h3>Search by Name</h3>
        <button onclick="window.location.href='manualscan.php';">Search</button>
      </div>
      <div class="copyright">
        <p>&copy; Copyright Scan-A-Can 2022</p>
      </div>
    </section>

    <script src="script.js"></script>
  </body>
  </html>
