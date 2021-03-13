<a href="index.html">Back to Index</a> <br/>
<?php
  $link = mysqli_connect("localhost", "root", "");
  echo mysqli_get_server_info($link);
  mysqli_close($link);
?>
