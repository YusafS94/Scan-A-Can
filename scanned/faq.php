
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="back_image">
      <div class="main">
        <div class="navbar">
            <div id="logo">
                <img src="./logo1.png" height="100"width="100"/>
            </div>

      <div class="menu">
            <ul>
                    <li><a href="landinghome.html">Home</a></li>
                    <li><a href="api.html">Maps</a></li>
                    <li><a href="leaderboard.html">Leaderboard</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="scanneditems.html">Scanned Items</a></li>
                    <li><a href="faq.html">FAQ's</a></li>
            </ul>
      </div>


<!DOCTYPE html>
<html>
<head>
	<title>Search Bar</title>
</head>
<body>
<h2>Please type in your question</h2>
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">

</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=myscanner",'u1975706','MS01apr00ms');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `faq` WHERE Question = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>

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
<?php
	}


		else{
			echo "Try another question or send question as message";
		}


}

?>




<div class="footer">
  <div id="logo">
    <img src="./logo1.png" height="100"width="100"/>
  </div>

      <div class="col">
        <ul>
          <li><a href="landinghome.html">Home</a></li>
          <li><a href="api.html">Maps</a></li>
          <li><a href="leaderboard.html">Leaderboard</a></li>
          <li><a href="profile.html">Profile</a></li>
          <li><a href="scanneditems.html">Scanned Items</a></li>
          <li><a href="faq.html">FAQ's</a></li>
          <li><a href="faq.html">Help</a></li>

        </ul>
      </div>

<div class="social">
<h1>Social</h1>
<ul>
  <li><img src="https://www.flaticon.com/free-icon/facebook_733547?term=facebook&page=1&position=8&page=1&position=8&related_id=733547&origin=tag" width="32" style="width: 32px;"></li>
  <li><img src="https://pixabay.com/vectors/twitter-social-media-icon-social-2430933/" width="32" style="width: 32px;"></li>
  <li><img src="https://pixabay.com/vectors/instagram-insta-instagram-logo-2935404/" width="32" style="width: 32px;"></li>
</ul>
</div>
  <div class="appendix"></div>
    <li><a href="scanneditems.html">Terms of Service</a></li>
    <li><a href="faq.html">Privacy policy</a></li>
    <li><a href="faq.html">Cookies</a></li>
</div>






<p>---------------------------------------------------------------------------------</p>

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

<p>---------------------------------------------------------------------------------</p>


    <div class="footer">
      <div id="logo">
        <img src="images/logo1.png">
      </div>

          <div class="col">
            <ul>
              <li><a href="landinghome.html">Home</a></li>
              <li><a href="api.html">Maps</a></li>
              <li><a href="leaderboard.html">Leaderboard</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="scanneditems.html">Scanned Items</a></li>
              <li><a href="faq.html">FAQ's</a></li>
              <li><a href="faq.html">Help</a></li>

            </ul>
          </div>

  <div class="social">
    <h1>Social</h1>
    <ul>
      <li><img src="https://www.flaticon.com/free-icon/facebook_733547?term=facebook&page=1&position=8&page=1&position=8&related_id=733547&origin=tag" width="32" style="width: 32px;"></li>
      <li><img src="https://pixabay.com/vectors/twitter-social-media-icon-social-2430933/" width="32" style="width: 32px;"></li>
      <li><img src="https://pixabay.com/vectors/instagram-insta-instagram-logo-2935404/" width="32" style="width: 32px;"></li>
    </ul>
  </div>
      <div class="appendix"></div>
        <li><a href="scanneditems.html">Terms of Service</a></li>
        <li><a href="faq.html">Privacy policy</a></li>
        <li><a href="faq.html">Cookies</a></li>
  </div>




  </body>
  </html>
