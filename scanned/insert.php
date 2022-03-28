
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inserted</title>
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
          <img class="logo--img" src="images/Updated_logo.png" />
        </div>
        <div class="nav--links--section">
          <ul class="nav--links desktop--nav--links">
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

  <section class="successful-scan--table table centre">
    <img class="check--icon" src="images/icons/check_black_24dp.svg" alt="">
    <h1>Item Scanned Successfully</h1>
    <table border = "1", align="center">
    <tr>
      <th>Name</th>
      <th>Quantity already recycled</th>
      <th>Material</th>
      <th>Is it Recycleable?</th>
      <th>Picture</th>
    </tr>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "u1975706");
    define("DB_PASS", "MS01apr00ms");
    define("DB_NAME", "u1975706");
    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if($connect){
      echo "";
    }else{
      echo "";
    }
    if(isset($_POST['text'])){
      $text = $_POST['text'];
      $sql = "SELECT * FROM `recentlyscanned` WHERE qrcode = '$text';";
      $query = mysqli_query($connect,$sql);
      if ($sql >= 0){
              while ($row = mysqli_fetch_assoc($query)){
                  echo  "
                  <tr>
                  <td>".$row['Name']."</td>
                  <td>".$row['Quantity']."</td>
                  <td>".$row['Material']."</td>
                  <td>".$row['Recycle']."</td>
                  <td><img src='".$row['picture']."' height='100' width='100'/></td>
                  </tr>
                  "; //this show dogs name, breed name, score obtained by each dog, clickable link to get to details page, clickable link to mail the shown email
              }
          }
          else {
              echo "no results";
          }
    }
    ?>
    </table>
  </section>

  <section class="recycle--call-to-action">
    <button onclick="window.location.href='recycle.php';">Recycle</button>
  </section>

  <section class="footer">
      <div class="container">
        <div class="footer--top">
          <div class="sign-in">
            <button onclick="window.location.href='login.html';">
              Sign In
            </button>
          </div>
          <div id="logo">
            <img class="logo--img" src="images/Updated_logo.png" />
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
        </div>
        <div class="footer--bottom">
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
            <button onclick="window.location.href='manualscan.php';">
              Search
            </button>
          </div>
          <div class="copyright">
            <p>&copy; Copyright Scan-A-Can 2022</p>
          </div>
        </div>
      </div>
    </section>

    <script src="script.js"></script>
  </body>
  </html>
