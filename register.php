<!DOCTYPE html>  
<html>  
<head>  
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>  
<body>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert alert-danger'>Username tersebut sudah digunakan!</div>";
            }
        }
    ?>
    <br><br>  
    <div class="kotak_login" style="width:600px;">
        <div class="container" style="width:500px;">
            <h3 align="center">Register</h3>  
            <br>  

            <form method="post" action="cek_register.php">  
                <label>Enter Username</label>  
                <input type="text" name="username" class="form-control" required="required">  
                
                <br>
                <label>Enter Password</label>  
                <input type="password" name="password" class="form-control" required="required"> 
                
                <br>
                <input type="submit" class="tombol_login_register" value="REGISTER">
     
                <br><br> 
                <center>
                    <a class="link" href="login.php">Login</a>
                </center>  
            </form>
        </div>
    </div>  
</body>  
</html> 