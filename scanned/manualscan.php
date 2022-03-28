<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search by name</title>
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
      <div class="nav--section container">
        <div class="logo">
          <img class="logo--img" src="images/logo1.png" />
        </div>
        <div class="nav--links--section">
          <ul class="nav--links">
            <li><a class="nav--link" href="landinghome.html">Home</a></li>
            <li><a class="nav--link" href="api.html">Maps</a></li>
            <li><a class="nav--link" href="leaderboard.php">Leaderboard</a></li>
            <li><a class="nav--link" href="profile.html">Profile</a></li>
            <li><a class="nav--link" href="scan.php">Scanned Items</a></li>
            <li><a class="nav--link" href="faq.php">FAQs</a></li>
          </ul>
        </div>
        <div class="search--icon">
          <img src="images/Icons/search_black_24dp.svg" alt="" />
        </div>
        <span class="openbtn" onclick="openNav()">
          <img src="images/Icons/outline_menu_black_24dp.png" alt="" />
        </span>
      </div>
      <div class="overlay" id="myNav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;</a
        >
        <div class="overlay-content">
          <ul class="nav--links">
            <li><a class="nav--link" href="landinghome.html">Home</a></li>
            <li><a class="nav--link" href="api.html">Maps</a></li>
            <li><a class="nav--link" href="leaderboard.php">Leaderboard</a></li>
            <li><a class="nav--link" href="profile.html">Profile</a></li>
            <li><a class="nav--link" href="scan.php">Scanned Items</a></li>
            <li><a class="nav--link" href="faq.php">FAQs</a></li>
          </ul>
        </div>
      </div>
    </nav>
<section class="manual--search--form table container centre">
  <h2>Please key in the name of your product</h2>
  <form method="post">
  <label>Search</label>
  <input type="text" name="search">
  <input type="submit" name="submit">
  </form>
  
  <?php
  
  $con = new PDO("mysql:host=localhost;dbname=u1975706",'u1975706','MS01apr00ms');
  
  if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `recentlyscanned` WHERE Name = '$str'");
  
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
  
    if($row = $sth->fetch())
    {
      ?>
      <br><br><br>
  
      <h3>Below are details of the searched Contents</h3>
      <table border = "1", align="center">
        <tr>
          <th>Name</th>
          <th>How much you recycled in past</th>
          <th>Material</th>
          <th>Is it Recycleable?</th>
          <th>Picture</th>
  
        </tr>
  
  
        <tr>
          <td style="text-align:center"><?php echo $row->Name; ?></td>
          <td style="text-align:center"><?php echo $row->Quantity; ?></td>
          <td style="text-align:center"><?php echo $row->Material; ?></td>
          <td style="text-align:center"><?php echo $row->Recycle; ?></td>
          <td style="text-align:center"><img src="<?php echo $row->picture; ?>" height='100' width='100'/></td>
  
          <td></td>
        </tr>
  
      </table>
  <?php
    }
  
  
      else{
        echo "Name Does not exist";
      }
  }
  ?>
</section>


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
            <img
              class="social--icons"
              src="images/Icons/fb_social media_icon.svg"
            />
          </li>
          <li>
            <img
              class="social--icons"
              src="images/Icons/instagram logo_icon.svg"
            />
          </li>
          <li>
            <img
              class="social--icons"
              src="images/Icons/twitter logo_icon.svg"
            />
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
