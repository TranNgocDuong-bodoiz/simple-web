<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    require_once("config/connection.php");
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = mysqli_query($conn,"SELECT * FROM tbl_taikhoankh WHERE username = '$username' && password = '$password' ");
        $total = mysqli_num_rows($sql);
        if($total > 0){
            $row = mysqli_fetch_array($sql);
            $role = $row["role"];
            if($role == "admin"){
            $_SESSION['user'] = $row['username'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['email'] =$row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['log'] = 1;
            header('location: index.php');

            }
            else{
                $_SESSION['log'] = 0;
                echo " <script> alert('sai tài khoản mật khẩu admin') </script> ";
            }
        }
        else{
            $_SESSION['log'] = 0;
            echo " <script> alert('sai tài khoản mật khẩu admin') </script> ";
        }
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script>
        
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
