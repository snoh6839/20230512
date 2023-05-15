<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 등록</title>
</head>

<body>
    <form method="post" action="/user/signup">
        NAME:<br>
        <input type="text" name="user_name">
        ID:<br>
        <input type="text" name="user_id">
        <br><br>
        PW:<br>
        <input type="password" name="user_pw">
        <br><br>
        <button type="submit" value="Submit">
    </form>
</body>

</html>