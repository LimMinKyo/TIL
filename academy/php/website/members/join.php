<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        body,input,select,option,button{font-size:24px}
        input[type=checkbox]{width:24px;height:24px}
        span{font-size: 14px;color: red;}
    </style>
    <script type="text/javascript">
        function form_check(){
            // alert("TEST");

            // 객체 생성
            var uname = document.getElementById("uname");
            var uid = document.getElementById("uid");
            var pwd = document.getElementById("pwd");
            var repwd = document.getElementById("repwd");
            var mobile = document.getElementById("mobile");
            var agree = document.getElementById("agree");
            
            if(uname.value == ""){ 
                var err_txt = document.querySelector(".err_name");
                err_txt.innerHTML = "<em>이름을 입력하세요.</em>";
                uname.focus();
                return false;
            };

            if(uid.value == ""){
                var err_txt = document.querySelector(".err_id");
                err_txt.innerHTML = "<em>아이디를 입력하세요.</em>";
                uid.focus();
                return false;
            };
            var uid_len = uid.value.length;
            if(uid_len < 4 || uid_len > 12){
                var err_txt = document.querySelector(".err_id");
                err_txt.textContent = "아이디는 4~12글자만 입력할 수 있습니다.";
                uid.focus();
                return false;
            };

            if(pwd.value == ""){
                var err_txt = document.querySelector(".err_pwd");
                err_txt.innerHTML = "<em>비밀번호를 입력하세요.</em>";
                pwd.focus();
                return false;
            };
            var pwd_leng = pwd.value.length;
            if(pwd_leng < 4 || pwd_leng > 8){
                var err_txt = document.querySelector(".err_pwd");
                err_txt.textContent = "비밀번호는 4~8글자만 입력할 수 있습니다."
                pwd.focus();
                return false;
            };
            if(pwd.value != repwd.value){
                var err_txt = document.querySelector(".err_repwd");
                err_txt.textContent = "비밀번호를 확인해 주세요."
                repwd.focus();
                return false;
            };
            // 정규식 작성(규칙 만들기)해서 변수에 저장
            var reg_mobile = /^[0-9]+$/g;
            // var reg_mobile = /^[0-9]{10,11}$/g; // + 최소 글자, 최대글자
            if(!reg_mobile.test(mobile.value)){
                var err_txt = document.querySelector(".err_mobile");
                err_txt.textContent = "전화번호는 숫자만 입력할 수 있습니다."
                mobile.focus();
                return false;
            };

            if(!agree.checked){
                alert("약관 동의가 필요합니다.");
                uid.focus();
                return false;
            };
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
    </script>
</head>
<body>
    <form name="join_form" action="insert.php" method="post" onsubmit="return form_check()">
        <fieldset>
            <legend>회원가입</legend>
            <p>
                <label for="u_name">이름</label>
                <input type="text" name="u_name" id="u_name" class="u_name">
                <br>
                <span class="err_name"></span>
            </p>

            <p>
                <label for="u_id">아이디</label>
                <input type="text" name="u_id" id="u_id" class="u_id" readonly>
                <button type="button" onclick="id_search()">아이디 중복확인</button>
                <br>
                <span class="err_id">* 아이디는 4~12글자만 입력할 수 있습니다.</span>
            </p>

            <p>
                <label for="pwd">비밀번호</label>
                <!-- <input type="password" name="pwd" id="pwd"> -->
                <input type="password" name="pwd" id="pwd">
                <br>
                <span class="err_pwd">* 비밀번호는 4~8글자만 입력할 수 있습니다.</span>
            </p>

            <p>
                <label for="repwd">비밀번호 확인</label>
                <!-- <input type="password" name="repwd" id="repwd"> -->
                <input type="password" name="repwd" id="repwd">
                <br>
                <span class="err_repwd"></span>
            </p>

            <p>
                <label for="mobile">전화번호</label>
                <input type="text" name="mobile" id="mobile">
                <br>
                <span class="err_mobile">"-"없이 숫자만 입력</span>
            </p>

            <p>
                <label for="email_id">이메일</label>
                <input type="text" name="email_id" id="email_id"> @ 
                <input type="text" name="email_dns" id="email_dns"> 
                <select name="email_sel" id="email_sel" onchange="change_email()">
                    <option value="">직접 입력</option>
                    <option value="naver.com">NAVER</option>
                    <option value="hanmail.net">DAUM</option>
                    <option value="gmail.com">GOOGLE</option>
                </select>
            </p>
            
            <p>
                <label for="birth">생년월일</label>
                <input type="text" name="birth" id="birth">
                <br>
                <span>* 8자리 숫자로 입력 ex) 20211022</span>
            </p>

            <p>
                <label for="postalCode">주소</label>
                <input type="text" name="postalCode" id="postalCode" size="5">
                <button type="button" onclick="addr_search()">주소검색</button>
                <br>
                <label for="addr1">기본주소</label><input type="text" name="addr1" id="addr1" size="30">
                <br>
                <label for="addr2">상세주소</label><input type="text" name="addr2" id="addr2" size="30">
            </p>

            <p>
                <input type="checkbox" name="agree" id="agree" value="y">
                <label for="agree">약관 동의</label> 
            </p>

            <p>
                <button type="button" onclick="history.back()">취소</button>
                <button type="submit">회원가입</button>
            </p>
        </fieldset>
    </form>
</body>
</html>