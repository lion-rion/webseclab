<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>1</title>
</head>
<body>
<?php 

$dsn = 'mysql:dbname=db;host=db';
$user = 'root';
$password = 'root';

//ログイン認証
if (isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$pass';";
    $dbh = new PDO($dsn, $user, $password);
    $result = $dbh->query($sql);
    $result = $result->fetch();
    if ($result) {
        $msg = 'ログインしました。';
        $link = '<a href="index.php">ホーム</a>';
    } else {
        $msg = 'メールアドレスもしくはパスワードが間違っています。';
        $link = '<a href="login.php">戻る</a>';
    }
}
?>
    <form action="index.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="name" placeholder="Username" />
        <input type="password" name="password" placeholder="Password" />
        <input class="btn" type="submit" value="Login"/>
        <?php if(isset($msg)){echo $msg;} ?>
    </form>
</body>
</html>

