<?php
  session_start();

  // $s_id = isset(조건) ? A : B;
  $s_id = isset($_SESSION["s_id"]) ? $_SESSION["s_id"] : "";
  $s_name = isset($_SESSION["s_name"]) ? $_SESSION["s_name"] : "";
  // echo $s_id;
  // exit;
  
  /* 관리자가 아닌 경우 index문서로 이동 */
  if(!$s_id || ($s_id != "admin")){
    echo "
      <script type=\"text/javascript\">
        alert(\"관리자 로그인이 필요합니다.\");
        location.href = \"/index.php\";
      </script> 
    ";
  }
?>