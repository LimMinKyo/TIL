<?php

include "../inc/admin_session.php";

$u_idx = $_GET["u_idx"];

/* DB 연결 */
include "../../inc/dbcon.php";

/* 쿼리 작성 */
$sql = "select * from members where idx = $u_idx;";

/* 쿼리 전송 */
$result = mysqli_query($dbcon, $sql);

/* 결과 가져오기 */
$array = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정보수정</title>
    <style>
        body,input,select,option,button{font-size:24px}
        input[type=checkbox]{width:24px;height:24px}
        span{font-size: 14px;color: red;}
    </style>
    <script type="text/javascript">
        function edit_check(){
            // alert("TEST");

            // 객체 생성
            var pwd = document.getElementById("pwd");
            var mobile = document.getElementById("mobile");
        
            if(pwd.value){
              var pwd_leng = pwd.value.length;
              if(pwd_leng < 4 || pwd_leng > 8){
                var err_txt = document.querySelector(".err_pwd");
                err_txt.textContent = "비밀번호는 4~8글자만 입력할 수 있습니다."
                pwd.focus();
                return false;
              };
            };
            if(pwd.value){
              if(pwd.value != repwd.value){
                var err_txt = document.querySelector(".err_repwd");
                err_txt.textContent = "비밀번호를 확인해 주세요."
                repwd.focus();
                return false;
              }
            };

            if(mobile.value){
              // 정규식 작성(규칙 만들기)해서 변수에 저장 
              var reg_mobile = /^[0-9]+$/g;
              // var reg_mobile = /^[0-9]{10,11}$/g; // + 최소 글자, 최대글자
              if(!reg_mobile.test(mobile.value)){
                var err_txt = document.querySelector(".err_mobile");
                err_txt.textContent = "전화번호는 숫자만 입력할 수 있습니다."
                mobile.focus();
                return false;
              };
            }
        };

        function change_email(){
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");

            var idx = email_sel.options.selectedIndex;

            var sel_txt = email_sel.options[idx].value;
            email_dns.value = sel_txt;
        };

        function id_search(){
            window.open("search_id.php", "", "width=600, height=250, left=0, top=0");
        };

        function addr_search(){
            window.open("search_addr.php", "", "width=600, height=250, left=0, top=0");
        };
        function del_check(){
            var i = confirm("정말 삭제하시겠습니까?\n삭제한 아이디는 복원하실 수 없습니다.")

            if(i == true){
                location.href = "delete.php?u_idx='<?php $u_idx ?>'";
            }
        }
    </script>
</head>
<body>
    <form name="edit_form" action="edit_ok.php" method="post" onsubmit="return edit_check()">
        <fieldset>
            <legend>정보 수정</legend>
            <input type="hidden" name="u_idx" value="<?php echo $u_idx; ?>">
            <p>
                <span for="txt">이름</span>
                <?php echo $array["u_name"]; ?>
            </p>

            <p>
                <span for="txt">아이디</span>
                <?php echo $array["u_id"]; ?>
            </p>

            <p>
                <label for="pwd">비밀번호</label>        
                <input type="password" name="pwd" id="pwd">
                <br>
                <span class="err_pwd">* 비밀번호는 4~8글자만 입력할 수 있습니다.</span>
            </p>

            <p>
                <label for="repwd">비밀번호 확인</label>
                <input type="password" name="repwd" id="repwd">
                <br>
                <span class="err_repwd"></span>
            </p>

            <p>
                <label for="mobile">전화번호</label>
                <input type="text" name="mobile" id="mobile" value="<?php echo $array["mobile"]; ?>">
                <br>
                <span class="err_mobile">"-"없이 숫자만 입력</span>
            </p>

            <?php 
              // explode("기준 문자", "어떤 문장에서");
              $email = explode("@", $array["email"]);
            ?>
            
            <p>
                <label for="email_id">이메일</label>
                <input type="text" name="email_id" id="email_id" value="<?php echo $email[0]; ?>"> @ 
                <input type="text" name="email_dns" id="email_dns" value="<?php echo $email[1]; ?>"> 
                <select name="email_sel" id="email_sel" onchange="change_email()">
                    <option value="">직접 입력</option>
                    <option value="naver.com">NAVER</option>
                    <option value="hanmail.net">DAUM</option>
                    <option value="gmail.com">GOOGLE</option>
                </select>
            </p>

            <?php 
              // str_replace("어떤문자를", "어떤 문자로", "어떤 문장에서");
              $birth = str_replace("-", "", $array["birth"]);
            ?>
            <p>
                <label for="birth">생년월일</label>
                <input type="text" name="birth" id="birth" value="<?php echo $birth; ?>">
                <br>
                <span>* 8자리 숫자로 입력 ex) 20211022</span>
            </p>

            <p>
                <label for="postalCode">주소</label>
                <input type="text" name="postalCode" id="postalCode" size="5" value="<?php echo $array["postalCode"]; ?>">
                <button type="button" onclick="addr_search()">주소검색</button>
                <br>
                <label for="addr1">기본주소</label><input type="text" name="addr1" id="addr1" size="30" value="<?php echo $array["addr1"]; ?>">
                <br>
                <label for="addr2">상세주소</label><input type="text" name="addr2" id="addr2" size="30" value="<?php echo $array["addr2"]; ?>">
            </p>  

            <p>
                <button type="button" onclick="location.href='./list.php'">이전으로</button>
                <button type="button" onclick="location.href='../admin.php'">홈으로</button>
                <button type="button" onclick="del_check()">회원삭제</button>
                <button type="submit">정보수정</button>
            </p>
        </fieldset>
    </form>
</body>
</html>