<?php
session_start();

/* 세션 삭제 */
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

/* 페이지 이동 */
echo "
  <script>
    alert(\"로그아웃 되었습니다.\");
    location.href = \"../index.php\";
  </script>
";
?>