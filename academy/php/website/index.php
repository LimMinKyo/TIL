<?php
  session_start();

  // $s_id = isset(조건) ? A : B;
  $s_id = isset($_SESSION["s_id"]) ? $_SESSION["s_id"] : "";
  $s_name = isset($_SESSION["s_name"]) ? $_SESSION["s_name"] : "";
  // echo "Session ID : ".$s_id." / Name : ".$s_name;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>인덱스</title>
</head>
<body>
  <h2>* 인덱스 *</h2>
  <p>인덱스 문서입니다.</p>

    <?php if(!$s_id){ ?>
    <!-- 로그인 전 -->
    <p>
      <a href="./login/login.php">로그인</a>
      <a href="./members/join.php">회원가입</a>
    </p>
    <?php } else { ?>
    <!-- 로그인 후 -->
    <p>"<?php echo $s_name; ?>"님, 안녕하세요.</p>
    <p>
      <?php if($s_id == "admin"){ ?>
      <!-- 관리자 로그인 -->
      <a href="admin/admin.php">관리자</a>
      <?php }; ?>
      <a href="login/logout.php">로그아웃</a>
      <a href="members/edit.php">정보수정</a>
    </p>
    <?php } ?>

</body>
</html>