<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQs</title>
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
          <img src="images/Icons/outline_menu_black_24dp.png" alt="" />
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


<section class="input--form container">
  <h2>Please type in your question</h2>
  <form method="post">
  <label>Search</label>
  <input type="text" name="search">
  <input type="submit" name="submit">
  </form>
</section>

<?php
$con = new PDO("mysql:host=localhost;dbname=u1975706",'u1975706','MS01apr00ms');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `faq` WHERE Question = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>

    <section class="results--table container">
      <h3>Below are details of the searched Contents</h3>
          <table border = "1", align="center">
            <tr>
              <th>ID</th>
              <th>Question</th>
          <th>Answer</th>
      
      
            </tr>
      
      
            <tr>
              <td style="text-align:center"><?php echo $row->ID; ?></td>
              <td style="text-align:center"><?php echo $row->Question; ?></td>
          <td style="text-align:center"><?php echo $row->Answer; ?></td>
          <td></td>
            </tr>
      
          </table>    
          <h2>Scanned Successfull</h2>
    </section>



<?php
	}


		else{
			echo "Try another question or send question as message";
		}


}
?>

<section class="questions--section container centre">
  <details class="details-example">
      <summary>What Items can be Recycled?</summary>
      <ul>
          <li>Plastics, metals.......</li>
      </ul>
  </details>
  
  <details class="details-example">
      <summary>What Items can not be Recycled?</summary>
      <ul>
          <li>ccoked lentils ;)</li>
      </ul>
  </details>
  
  
  <details class="details-example">
      <summary>How does Scan A Can make recycling easier?</summary>
      <ul>
          <li>Will tell in future</li>
      </ul>
  </details>
  
  <details class="details-example">
      <summary>About the Website</summary>
      <ul>
          <li>Will tell in future</li>
      </ul>
  </details>
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
            <img class="social--icons" src="images/Icons/fb_social media_icon.svg" />
          </li>
          <li>
            <img class="social--icons" src="images/Icons/instagram logo_icon.svg" />
          </li>
          <li>
            <img class="social--icons" src="images/Icons/twitter logo_icon.svg" />
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
