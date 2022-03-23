
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

    $sql = "INSERT INTO student_scanner (Student_id,Time) VALUES('$text',NOW())";
    $query = mysqli_query($connect,$sql);
    if($query){
      echo "";

    }else{
      echo "";
    }


  }
  ?>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
<body>
    <table border = "1", align="center">
    <tr>
      <th>Details</th>
      <th>Date and Time</th>

    </tr>
  <?php
  define("DB_SERVER", "localhost");
  define("DB_USER", "u1975706");
  define("DB_PASS", "MS01apr00ms");
  define("DB_NAME", "u1975706");
  $mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    $sql = "SELECT * FROM student_scanner ORDER BY sl DESC LIMIT 1;"; //sql statement to extract wanted results from assignment
    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo  "
                <tr>
                <td>".$row['Student_id']."</td>
                <td>".$row['Time']."</td>
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
