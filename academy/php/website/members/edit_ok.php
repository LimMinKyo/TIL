<!-- <meta charset="utf-8"> -->
<?php
/* 세션 시작 */
session_start();

$s_idx = $_SESSION["s_idx"];
// echo $s_idx;
// exit;

//// 이전 페이지에서 값 가져오기
// method="post" : $_POST["필드의 name값"]
// $_POST["u_name"];
$pwd = $_POST["pwd"];
$birth = $_POST["birth"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$mobile = $_POST["mobile"];

// 값 확인
// js : document.write()
echo "비밀번호 : ".$pwd."<br>";
echo "전화번호 : ".$mobile."<br>";
echo "이메일 : ".$email."<br>";
echo "우편번호 : ".$postalCode."<br>";
echo "기본주소 : ".$addr1."<br>";
echo "상세주소 : ".$addr2."<br>";
// exit;

/* DB 접속 */
// $dbcon = mysqli_connect("호스트", "사용자", "비밀번호");
// mysqli_select_db("연결객체", "DB명");

// $dbcon = mysqli_connect("호스트", "사용자", "비밀번호", "DB명");
// $dbcon = mysqli_connect("localhost", "root", "1234", "front");

// $dbcon = mysqli_connect("호스트", "사용자", "비밀번호", "DB명") or die ("접속 실패 시 메세지");
// $dbcon = mysqli_connect("localhost", "root", "", "front") or die ("접속에 실패하였습니다.");
// mysqli_set_charset($dbcon, "utf8");

include "../inc/dbcon.php";

/* 쿼리 작성 */
// insert into 테이블명(필드명, 필드명, ...) values(값, 값, 값, ...);
// insert into members(u_name, u_id, pwd, birth, postalCode, addr1, addr2, email, mobile, reg_date) values("홍길동", "hong", "1234", "20211203", "06253", "서울 강남구 강남대로 123 (푸르덴셜타워)", "123-456", "hong@abc.com", "01011112222", "2021-12-03");
// $sql = "insert into members(u_name, u_id, pwd, birth, postalCode, addr1, addr2, email, mobile, reg_date) values('홍길동', 'hong', '1234', '20211203', '06253', '서울 강남구 강남대로 123 (푸르덴셜타워)', '123-456', 'hong@abc.com', '01011112222', '2021-12-03');";
// echo $sql;

// $sql = "insert into members(u_name) values('".$u_name."');";
// $sql = "insert into members(u_name, u_id, pwd, birth, postalCode, addr1, addr2, email, mobile, reg_date) values('".$u_name."', '".$u_id."', '".$pwd."', '".$birth."', '".$postalCode."', '".$addr1."', '".$addr2."', '".$email."', '".$mobile."', '".$reg_date."');";
// echo $sql;

// $sql = "insert into members(u_name) values('$u_name');";
// $sql = "insert into members(u_name, u_id, pwd, birth, postalCode, addr1, addr2, email, mobile, reg_date) values('$u_name', '$u_id', '$pwd', '$birth', '$postalCode', '$addr1', '$addr2', '$email', '$mobile', '$reg_date');";
// echo $sql;

// update members set 필드명=값, 필드명=값, ...;
if(!$pwd){
  $sql = "update members set birth='$birth', postalCode='$postalCode', addr1='$addr1', addr2='$addr2', email='$email', mobile='$mobile' where idx=$s_idx;";
} else {
  $sql = "update members set pwd='$pwd', birth='$birth', postalCode='$postalCode', addr1='$addr1', addr2='$addr2', email='$email', mobile='$mobile' where idx=$s_idx;";
}
echo $sql;
// exit;

/* 데이터베이스에 쿼리 전송 */
// mysqli_query("연결객체", "전달할 쿼리");
mysqli_query($dbcon, $sql);

/* DB(연결) 종료 */
mysqli_close($dbcon);

/* 리디렉션 */
echo "
  <script type=\"text/javascript\">
    alert(\"정보가 수정되었습니다.\");
    // location.href = 'welcome.php';
    location.href = \"edit.php\";
  </script> 
";

?>

<!-- 
<script type="text/javascript">
  location.href = "welcome.php";
</script> 
-->