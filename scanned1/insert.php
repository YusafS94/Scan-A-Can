
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>


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


  </body>
  </html>
