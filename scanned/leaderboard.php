<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leaderboard</title>
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
        <span class="openbtn" onclick="openNav()">
          <img src="images/black-24dp/2x/outline_menu_black_24dp.png" alt="" />
        </span>
      </div>
      <!-- <ul class="nav--links">
          <li><a class="nav--link" href="landinghome.html">Home</a></li>
          <li><a class="nav--link" href="api.html">Maps</a></li>
          <li><a class="nav--link" href="leaderboard.php">Leaderboard</a></li>
          <li><a class="nav--link" href="profile.html">Profile</a></li>
          <li><a class="nav--link" href="scan.php">Scanned Items</a></li>
          <li><a class="nav--link" href="faq.php">FAQs</a></li>
        </ul> -->

      <div class="overlay" id="myNav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;</a
        >
        <div class="overlay-content">
          <!-- <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a> -->
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

      <!-- <span class="openbtn" onclick="openNav()">
          <img src="images/black-24dp/2x/outline_menu_black_24dp.png" alt="" />
        </span> -->
    </nav>


    <section class="kirklees--lb container">
      <h2>Kirklees Leaderboard</h2>


    <table border = "1", align="center">
      <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Picture</th>
        <th>Items recycled uptil now</th>
        <th>Location</th>
      </tr>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "u1975706");
    define("DB_PASS", "MS01apr00ms");
    define("DB_NAME", "u1975706");
    $mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $sql = "SELECT * FROM `Users1` WHERE 1;"; //sql statement to extract wanted results from assignment
        $result = mysqli_query($mysqli, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo  "
                    <tr>
                    <td>".$row['UserID']."</td>
                    <td>".$row["Name"]."</td>
                    <td><img src='".$row['DisplayPic']."' height='100' width='100'/></td>
                    <td>".$row["RecycledItems"]."</td>
                    <td>".$row["Location"]."</td>
                    </tr>
                    "; //this show dogs name, breed name, score obtained by each dog, clickable link to get to details page, clickable link to mail the shown email


                }
            }
            else {
                echo "no results";
            }
            $mysqli->close();
    ?>
  </table>
  </section>

    <section class="materials--lb container">
      <h2>Materials Leaderboard</h2>

    <table border = "1", align="center">
      <tr>
        <th>Ranking</th>
        <th>Material</th>
        <th>Winner Name</th>
        <th>Picture</th>
        <th>Recycled Items by this Scan-A-Canner</th>
      </tr>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "u1975706");
    define("DB_PASS", "MS01apr00ms");
    define("DB_NAME", "u1975706");
    $mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $sql = "SELECT * FROM `Material` WHERE 1;"; //sql statement to extract wanted results from assignment
        $result = mysqli_query($mysqli, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo  "
                    <tr>
                    <td>".$row["Id"]."</td>
                    <td>".$row['Type']."</td>
                    <td>".$row["User"]."</td>
                    <td><img src='".$row['picture']."' height='100' width='100'/></td>
                    <td>".$row["Items Recycled"]."</td>

                    </tr>
                    "; //this show dogs name, breed name, score obtained by each dog, clickable link to get to details page, clickable link to mail the shown email


                }
            }
            else {
                echo "no results";
            }
            $mysqli->close();
    ?>
</table>
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