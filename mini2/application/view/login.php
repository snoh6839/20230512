<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <h3><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></h3>

    <form action="/user/login" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
        <label for="pw">PW</label>
        <input type="text" name="pw" id="pw">
        <button type="submit">Login</button>
    </form>
    <button id="signup" onclick="redirectSignUp();">회원등록</button>
    <script>
        function redirectSignUp() {
            location.href = "/user/signup"
        }
    </script>
</body>

</html>