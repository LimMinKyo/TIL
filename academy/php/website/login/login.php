<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    form{
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #login_btn {
      width: 100%;
      margin: auto;
    }
  </style>
  <title>로그인</title>
</head>

<body>
  <main id="content" class="content">
    <section class="login">
      <div class="login_wrap">
        <form name="" action="login_ok.php" method="post">
          <fieldset>
            <legend>LOGIN</legend>
            <p>
              <label for="u_id">아이디</label>
              <input type="text" name="u_id" id="u_id" placeholder="ID" required>
            </p>
            <p>
              <label for="pwd">비밀번호</label>
              <input type="password" name="pwd" id="pwd" placeholder="Password" required>
            </p>
            <p>
              <input type="checkbox" name="auto_login" id="auto_login" value="yes">
              <label for="auto_login">자동 로그인</label>
              <a href="#">비밀번호 찾기</a>
              <a href="../members/join.php">회원가입</a>
            </p>
            <button type="button" id="back_btn" onclick="history.back()">BACK</button>
            <button type="submit" class="login_btn" id="login_btn">LOGIN</button>
          </fieldset>
        </form>
      </div>
    </section>
  </main>
</body>

</html>