<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"역삼동"의 검색결과</title>
    <style>
        body{font-size:20px}
    </style>
    <script type="text/javascript">
        function return_addr(pCode, addr){
            opener.document.getElementById("postalCode").value = pCode;
            opener.document.getElementById("addr1").value = addr;
            window.close();
        };
    </script>
</head>
<body>
    <p>
        입력하신 <span class="able">"역삼동"</span> 검색 결과입니다.
    </p>
    <hr>
    <p>
        <a href="#" onclick="return_addr('06253','서울 강남구 강남대로 123 (푸르덴셜타워)')">
            06253 서울 강남구 강남대로 123 (푸르덴셜타워)
        </a>
    </p>
    <p>
        <a href="#" onclick="return_addr('12343','서울 강남구 서초대로 456 (동희빌딩)')">
            12343 서울 강남구 서초대로 456 (동희빌딩)
        </a>
    </p>
    <p>
        <a href="#" onclick="return_addr('56789','서울 강남구 테헤란로 789')">
            56789 서울 강남구 테헤란로 789
        </a>
    </p>
</body>
</html>