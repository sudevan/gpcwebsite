
<?php
 include "include.php";
 
 $no = $_POST['getresult'];
  $query = "select * from albums  limit $no,2 ";
            $result = $conn->query($query);
            $result->setfetchmode(PDO::FETCH_ASSOC);

            while($row = $result->fetch())
 {
  echo "<p class='result'>".$row['thumb']."<br>".$row['description']."</p>";
  
 }
?>
