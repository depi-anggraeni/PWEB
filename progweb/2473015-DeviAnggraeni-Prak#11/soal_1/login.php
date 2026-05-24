<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2473015-Devi Anggraeni</title>
</head>
<body>
    <style>
        .login-box{
            border: 1px solid grey;
            width: 350px;
            font-family: sans-serif;}
        .header{
            background-color: darkblue;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 32px;}
        .footer{
            border-top: 1px solid grey;
            padding: 10px;
            font-size: 12px;}
    </style>
</head>
<body>
<div class="login-box">
    <div class="header">Login</div>
    
    <form action="prosesLogin.php" method="POST" class="form-content">
        <table cellpadding="5">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" style="width: 200px;"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" style="width: 200px;"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">login</button></td>
            </tr>
        </table>
    </form>
    
    <div class="footer">
        @UKM2014<br>
        Devi Anggraeni-2473015<sup>©</sup>
    </div>
</div>

</body>
</html>