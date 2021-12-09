<!-- <meta charset="utf-8"> -->
<?php
// header ("content-type:text/html; charset=utf-8");

//// 이전 페이지에서 값 가져오기(GET 방식)
// method="get" : $_GET["필드의 name값"]
// $u_name = $_GET["u_name"];
// $u_id = $_GET["u_id"];
// $pwd = $_GET["pwd"];
// $repwd = $_GET["repwd"];
// $mobile = $_GET["mobile"];
// $email_id = $_GET["email_id"];
// $email_dns = $_GET["email_dns"];
// $birth = $_GET["birth"];
// $postalCode = $_GET["postalCode"];
// $addr1 = $_GET["addr1"];
// $addr2 = $_GET["addr2"];
// $agree = $_GET["agree"];

//// 이전 페이지에서 값 가져오기
// method="post" : $_POST["필드의 name값"]
// $_POST["u_name"];
// $u_name = $_POST["u_name"];
// $u_id = $_POST["u_id"];
// $pwd = $_POST["pwd"];
// $repwd = $_POST["repwd"];
// $mobile = $_POST["mobile"];
// $email_id = $_POST["email_id"];
// $email_dns = $_POST["email_dns"];
// $birth = $_POST["birth"];
// $postalCode = $_POST["postalCode"];
// $addr1 = $_POST["addr1"];
// $addr2 = $_POST["addr2"];
// $agree = $_POST["agree"];

//// 이전 페이지에서 값 가져오기
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$birth = $_POST["birth"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$mobile = $_POST["mobile"];

// date("형식") - Y:4자리 연도, y:2자리 연도, H:0~23시간, h:1~12시간 m s
$reg_date = date("Y-m-d");

// 값 확인
// js : document.write()
// echo "이름 : ".$u_name."<br>";
// echo "아이디 : ".$u_id."<br>";
// echo "비밀번호 : ".$pwd."<br>";
// echo "비밀번호 확인 : ".$repwd."<br>";
// echo "전화번호 : ".$mobile."<br>";
// echo "이메일 아이디 : ".$email_id."<br>";
// echo "이메일 도메인 : ".$email_dns."<br>";
// echo "우편번호 : ".$postalCode."<br>";
// echo "기본주소 : ".$addr1."<br>";
// echo "상세주소 : ".$addr2."<br>";
// echo "약관동의 : ".$agree."<br>";
// echo "가입일 : ".$reg_date;

// 값 확인
// js : document.write()
echo "이름 : ".$u_name."<br>";
echo "아이디 : ".$u_id."<br>";
echo "비밀번호 : ".$pwd."<br>";
echo "전화번호 : ".$mobile."<br>";
echo "이메일 : ".$email."<br>";
echo "우편번호 : ".$postalCode."<br>";
echo "기본주소 : ".$addr1."<br>";
echo "상세주소 : ".$addr2."<br>";
echo "가입일 : ".$reg_date."<br>";



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

$sql = "insert into members(";
$sql .= "u_name, u_id, pwd, birth, postalCode, addr1, addr2, email, mobile, reg_date";
$sql .= ") values(";
$sql .= "'$u_name', '$u_id', '$pwd', '$birth', '$postalCode', '$addr1', '$addr2', '$email', '$mobile', '$reg_date'";
$sql .= ");";
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
    // location.href = 'welcome.php';
    location.href = \"welcome.php\";
  </script> 
";

?>

<!-- 
<script type="text/javascript">
  location.href = "welcome.php";
</script> 
-->