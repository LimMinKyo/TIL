<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>주소 검색</title>
    <style>
        body,input,button{font-size:24px}
    </style>
</head>
<body>
    <form name="addr_search_form" action="result_addr.php" method="get">
        <fieldset>
            <legend>주소 검색</legend>
            <p>
                동 입력
                <input type="text" name="s_addr" id="s_addr" value="역삼동">
                <button type="submit">확인</button>
            </p>
        </fieldset>
    </form>
</body>
</html>