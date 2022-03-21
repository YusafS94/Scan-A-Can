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
                <img src="logo1.png" height="150" width="100"/>
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

  <title>Dogs database</title> <!--This is the title of the page-->
</head>
<body> <!--css element to change background colour-->
  <style>
  h1 {text-align: center;}
  h2 {text-align: center;}
  h3 {text-align: center;}
  h4 {text-align: center;}
  h5 {text-align: center;}


  </style>

  <table border = "1", align="center">
  <tr>
    <th>Name</th>
    <th>Quantity</th>
    <th>Material</th>
    <th>Recycleable?</th>
    <th>Picture</th>
    <th>QR-Code</th>

    <th></th>
  </tr>
  <?php
    $mysqli = mysqli_connect('localhost', 'root', '', 'myscanner');
    $sql = "SELECT Name, Quantity, Material, Recycle, picture, qrcode FROM recentlyscanned;"; //sql statement to extract wanted results from assignment
    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo  "
                <tr>
                <td>".$row['Name']."</td>
                <td>".$row['Quantity']."</td>
                <td>".$row['Material']."</td>
                <td>".$row['Recycle']."</td>
                <td><img src='".$row['picture']."' height='100' width='100'/></td>
                <td>".$row['qrcode']."</td>
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

  </body>
</html>



      <div class="footer">

          <img src="images/logo1.png">


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
        <li><img src="https://pixabay.com/vectors/twitter-social-media-icon-social-2430933/" height='100' width='150'/></li>
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
