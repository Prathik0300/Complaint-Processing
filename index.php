<?php
session_start();
require_once "PDO.php";
$salt = 'AbCdEfG102938';
if(isset($_POST['email']) && isset($_POST['password'])){
    $sql = "SELECT * FROM userlist WHERE email=:email AND password=:pass";
    $check = hash("md5",$salt.$_POST['password']);
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':email'=>$_POST['email'],
        ':pass'=>$check
    ));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row!==false){
        $_SESSION['name']=$row['Fullname'];
        $_SESSION['cpf']=$row['cpf'];
        $_SESSION['hvj']=$row['hvj'];
        $_SESSION['kunj']=$row['kunj'];
        $_SESSION['quarter']=$row['quarter'];
        header("Location: main.php");
        return;
    }
    else{
        $_SESSION['error']="Incorrect Credentials";
        header("Location: index.php");
        return;
    }
    
}

?>


<!DOCTYPE HTML5>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
        <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
        <title>Sign In</title>    
    </head>

    <body class="d-flex flex-column min-vh-100">
        <div class="container main-content">
            <div id="signIn-row" class="row">
                <div id="signIn-card-image" class="col-sm-4 my-5 mx-5 content-justify-center">
                    <img src="assets/gail%20img.jpg">
                </div>
                
                <div class="col-sm-10 col-md-8 col-lg-5 mx-auto">
                    <div class="card card-signin my-5" id="signIn-card">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Sign In</b></h4>
                
                            
                    <?php
                        if(isset($_SESSION['error'])){
                            echo('<div class="text-center">');
                            echo('<p style="color:red">'.$_SESSION['error']."</p>");
                            unset($_SESSION['error']);
                            echo('</div>');
                        }
                    ?>            
                            
                <!------------------------------------------FORM------------------------------------------------>
                            
                            <form class="form-signin" method="post" action="index.php">
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" name="email"  required autofocus> 
                                </div>
                                
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" placeholder="Password" class="form-control" name="password" required autofocus>
                                </div>
                                
                                <div id="forgotPass" class=" text-center mb-3 ">
                                    <button type="button" id="forgotPass" data-toggle="modal" data-target="#recovery" class="btn mb-3">Forgot Password?</button>
                                </div>
                                
                                <div class="text-center">
                                    <button class="btn btn-lg btn-primary text-uppercase" id="signIn" type="submit">Sign In
                                    </button>
                                </div>
                            </form>
                <!-------------------------------------END OF FORM--------------------------------------------------->
                            
                                <div id="signUp-page-link">
                                    <p>Not a User? <a href="signUp.php">register</a></p>
                                </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        <div id="recovery" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Password Reset</h5>
                        <button type="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                    
                    <div class="modal-body">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Enter your Email ID" id="resetLink" required autofocus>
                            <p class="my-2 text-center">We will send Password reset link to the submited email address</p>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <div class="form-row">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary form-control" id="forgotSubmit">Submit</button>
                            </div>
                            
                            <div class="form-group">
                                <button type="button" class="btn btn-primary form-control" id="forgotCancel" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>