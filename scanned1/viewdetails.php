<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>


<?php
  $mysqli = mysqli_connect('localhost', 'root', '', 'myscanner');
  $sql = "SELECT Student_id, Time FROM student_scanner;"; //sql statement to extract wanted results from assignment
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

<body>

</body>
</html>
