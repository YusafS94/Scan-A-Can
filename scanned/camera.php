
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scan Camera</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
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
    <div class="container">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <div class="row">
        <div class="col-md-6">
          <video id="preview" width="100%" class="video-back" playsinline></video>


                  <form action="insert.php" method="post" class="form-horizontal">

        </div>
        <div class="col-md-6">
          <label>Scan QR code</label>
          <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
        </div>
      </div>
    </div>
    <script>
    let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
    Instascan.Camera.getCameras().then(function(cameras){
      if (cameras.length > 1) {
            scanner.start(cameras[1]);

        }
        else if (cameras.length > 0) {
            scanner.start(cameras[0]);
        } else {
            console.error('No cameras found.');
        }
        if(cameras.length > 0){
          scanner.start(cameras[0]);
        } else{
          alert('No Cameras found');
          }
        }).catch(function(e) {
          console.error(e);
        });


      scanner.addListener('scan',function(c){
        document.getElementById('text').value=c;
        document.forms[0].submit();

      });
    </script>

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
