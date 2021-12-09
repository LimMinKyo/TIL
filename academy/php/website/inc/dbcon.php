<?php
  $dbcon = mysqli_connect("localhost", "root", "", "front") or die ("접속에 실패하였습니다.");
  mysqli_set_charset($dbcon, "utf8");
?>