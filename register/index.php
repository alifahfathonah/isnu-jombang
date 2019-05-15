<!DOCTYPE html>  
<html>  
<head>  
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>  
<body>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert alert-danger'><center>Username tersebut sudah digunakan!</center></div>";
            }
        }
    ?>

    <div class="container" style="width:50%">
        <br><br>
        <div class="jumbotron" style="50%">
            <h3 align="center">Register</h3>  
            <br>  

            <form method="post" action="aksi-register.php">  
                <label>Enter Username</label>  
                <input type="text" name="username" class="form-control" required="required">  
                
                <br>
                <label>Enter Password</label>  
                <input type="password" name="password" class="form-control" required="required"> 
                
                <br><br>
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="REGISTER">
     
                <br>
                <center>
                    <a href="../login/index.php">Login</a>
                </center>  
            </form>
        </div>
    </div>  
</body>  
</html> 