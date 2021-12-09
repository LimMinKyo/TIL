<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>아이디 중복 검색</title>
  <style>
    .err_id{
      color: red;
    }
  </style>
  <script>
    function check_id(){
      var input_id = document.getElementById("input_id");

      if(input_id.value == ""){
        var err_txt = document.querySelector(".err_id");
        err_txt.innerHTML = "<em>아이디를 입력하세요.</em>";
        input_id.focus();
        return false;
      };
      var input_id_len = input_id.value.length;
      if(input_id_len < 4 || input_id_len > 12){
        var err_txt = document.querySelector(".err_id");
        err_txt.textContent = "아이디는 4~12글자만 입력할 수 있습니다.";
        input_id.focus();
        return false;
      };
    }
  </script>
</head>
<body>
  <form name="search_id_form" action="result.php" method="post" onsubmit="return check_id()">
    <fieldset>
      <legend>아이디 입력</legend>
      <p>
        <label for="input_id">아이디</label>
        <input type="text" name="input_id" id="input_id" autofocus>
        <p class="err_id"></p>
        <button type="submit">검색</button>
      </p>
    </fieldset>
  </form>
</body>
</html>