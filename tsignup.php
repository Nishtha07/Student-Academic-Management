<html>
<head>
    <title> Signup Form  </title>
    <link rel="stylesheet" type="text/css" > 
    <style type="text/css">
    body{
    margin: 0;
    padding: 0;
    background: url(img.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 580px;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 12px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 12px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
        
         

        
        
</style>
</head>
    <body>
        

   
        
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Signup as teacher</h1>
            <form action="ttregister.php" method="post">
            <p>Name</p>
            <input type="text" name="1"  placeholder="Enter name" required>
           
            <p>ID</p>
            <input type="text" name="user" placeholder="Enter id" required>
            <p>Email ID</p>
            <input type="email" name="3"  placeholder="Enter email" required>
            <p>Gender</p>
            <select class="form-control" name ="4" placeholder="gender">
                <option>MALE</option>
                <option>FEMALE</option>
                </select>
            <p>Password</p>
            <input type="password" name="5" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="SIGNUP"> 
            <a href="tlogin.php">LOGIN</a> 
            </form>
        
        
        </div>
    
    </body>
</html>