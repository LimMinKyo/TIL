<?php

$u_idx = $_GET["u_idx"];
// echo idx;
// exit;

/* DB 접속 */
// $dbcon = mysqli_connect("호스트", "사용자", "비밀번호");
// mysqli_select_db("연결객체", "DB명");

// $dbcon = mysqli_connect("호스트", "사용자", "비밀번호", "DB명");
// $dbcon = mysqli_connect("localhost", "root", "1234", "front");

// $dbcon = mysqli_connect("호스트", "사용자", "비밀번호", "DB명") or die ("접속 실패 시 메세지");
// $dbcon = mysqli_connect("localhost", "root", "", "front") or die ("접속에 실패하였습니다.");
// mysqli_set_charset($dbcon, "utf8");

include "../../inc/dbcon.php";

/* 쿼리 작성 */
$sql = "delete from members where idx=$u_idx;";

echo $sql;

/* 데이터베이스에 쿼리 전송 */
// mysqli_query("연결객체", "전달할 쿼리");
mysqli_query($dbcon, $sql);

/* DB(연결) 종료 */
mysqli_close($dbcon);

// exit;

/* 리디렉션 */
echo "
  <script type=\"text/javascript\">
    alert(\"정상처리 되었습니다.\");
    location.href = \"list.php\";
  </script> 
";

?>

<!-- 
<script type="text/javascript">
  location.href = "welcome.php";
</script> 
-->