
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
<html>
  <head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <video id="preview" width="100%"></video>


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


    
  </body>
</html>
