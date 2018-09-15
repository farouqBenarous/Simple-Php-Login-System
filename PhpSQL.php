<?php
// database password cV4lrKub4GvgHVh5
$connection =mysqli_connect("localhost","root","","first");
if (!$connection) {
    die("error n: ".mysqli_connect_errno() . "  error msg : ".mysqli_connect_error());
}
  echo " You Are conected to the database ";
  echo mysqli_get_host_info($connection);

  mysqli_query($connection,"INSERT INTO userS (Email,Firstname,Lastname,Password) VALUES
                                   ('ro_ta@@@@','ta','bous','822')") or die(mysqli_error($connection));
 $last_id = mysqli_insert_id($connection);
 echo " <br> last Id is : ".$last_id."<br>";
 echo "<br> Insertion success<br>";


  $ressult =mysqli_query($connection,"select * From users ORDER BY  Uid DESC LIMIT 10") or die(mysqli_error($connection));
  while ($var = mysqli_fetch_array($ressult)) {
      echo  $var["Email"]."<br>";
     echo  $var["Firstname"]."<br>";
  }

echo  mysqli_num_rows($ressult)."<br>";


$ult =mysqli_query($connection,"Update users Set Firstname='zoubiiiir' where Firstname = 'farouk'") or die(mysqli_error($connection));

mysqli_close($connection);

?>
