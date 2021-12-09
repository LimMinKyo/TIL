<?php
include "inc/admin_session.php";

?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>관리자 페이지</title>
</head>
<body>
  <h2>* 관리자 페이지 *</h2>
    <p>"<?php echo $s_name; ?>"님, 안녕하세요.</p>
    <p>
      <a href="/website/admin/admin.php">홈으로</a>
      <!-- <a href="board/board_list.php">게시판 관리</a> -->
      <a href="#none">게시판 관리</a>
      <a href="members/list.php">회원 관리</a>
      <a href="../login/logout.php">로그아웃</a>
      </p>
    <hr>
</body>
</html>