<?php

require_once "PDO.php";
if(isset($_POST['fullName']) && isset($_POST['cpf']) && isset($_POST['hvj']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['kunj']) && isset($_POST['quarter'])){
    $salt='AbCdEfG102938';
    $sql="INSERT INTO userlist(Fullname,cpf,hvj,email,password,kunj,quarter) VALUES (:fullname,:cpf,:hvj,:email,:password,:kunj,:quarter)";
    $check = hash("md5",$salt.$_POST['password']);
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':fullname'=>$_POST['fullName'],
        ':cpf'=>$_POST['cpf'],
        ':hvj'=>$_POST['hvj'],
        ':email'=>$_POST['email'],
        ':password'=>$check,
        ':kunj'=>$_POST['kunj'],
        ':quarter'=>$_POST['quarter']
    ));
    header("Location: index.php");
    return;

}

?>

<!DOCTYPE HTML5>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
        

        <title>Sign Up Page</title>
    </head>
    
    <body id="signUp-bg" class="d-flex flex-column min-vh-100">
        <div class="container col-7">
            <div id="signUp-card" class="row justify-content-center" style="max-height: 100%; max-width: 100%;">
                <div class="col-sm-12 mx-auto">
                    <div id="signUp-info" class="card card-signin my-5">
                        <div class="card-body">
                            <h4 id="signUp-heading" class="card-title text-center"><b><u>Sign Up</u></b></h4>
                        </div>
                        
                        
                        
    <!-----------------------------FORM-------------------------->
                        
                        
                        <form class="form-signin" method="post" action="signUp.php">
                            
                            <div class="form-label-group">
                                <input type="text" id="Name" placeholder="Full Name" class="form-control" name="fullName" required autofocus>
                            </div>
                            
                            <div class="form-label-group">
                                <input type="text" id="cpf" placeholder="CPF No." name="cpf" class="form-control" required autofocus> 
                            </div>
                            
                            <div class="form-label-group">
                                <input type="text" id="hvj" placeholder="HVJ" class="form-control" name="hvj" required autofocus> 
                            </div>
                            
                            <div class="form-label-group">
                                <input type="email" id="setUsername" placeholder="Email Id" class="form-control" name="email" required autofocus>
                            </div>
                            
                            <div id="" class="form-label-group">
                                <input type="password" class="form-control" id="setPassword" placeholder="Password" name="password" required autofocus>
                            </div>
                            
                            <div class="form-label-group">
                                <input type="password" class="form-control" id="retypePassword" placeholder="Retype Password" required autofocus>
                            </div>
                            
                            
                            <div class="form-label-group text-center">
                                <select class="form-control text-center" id="kunj" name="kunj">
                                    <option>Netaji Kunj</option>
                                    <option>Patel Kunj</option>
                                    <option>Rajaji Kunj</option>
                                    <option>Rani-Laxmi Bai Kunj</option>
                                    <option>Nirala Kunj</option>
                                    <option>Rajendra Prasad Kunj</option>
                                    <option>Sarojini Kunj</option>
                                    <option>Kasturba Kunj</option>
                                    <option>Vir-savarkar Kunj</option>
                                    <option>Vinoba Bave Kunj</option>
                                    <option>Vivekanand Kunj</option>
                                    <option>Ambedkar Kunj</option>
                                    <option>Tilak Kunj</option>
                                    <option>Abdul Kalam Kunj</option>
                                    <option>Tagore Kunj</option>
                                    <option>Chandrasekar Azad Kunj</option>
                                    <option>Malviya Kunj</option>
                                    <option>Maulana Azad Kunj</option>
                                    <option>Nauroji Kunj</option>
                                    <option>Nehru Kunj</option>
                                    <option>Gokhale Kunj</option>
                                    <option>Jaiprakash Kunj</option>
                                    <option>Lajpat Kunj</option>
                                    <option>Chiplunkar Kunj</option>
                                    <option>Bhagat Singh Kunj</option>
                                    <option>Gandhi Kunj</option>
                                    <option>Anne Besant Kunj</option>
                                    <option>Premchand Kunj</option>
                                    <option>Kohinoor Hostel</option>
                                    <option>Himgiri Hostel</option>
                                </select>
                            </div>
                            
                            <div class="form-label-group">
                                <input id="quarterNo" class="form-control" type="text" placeholder="Quarter No./Room No." name="quarter" required autofocus>
                            </div>
                            
                            <div class="text-center">
                                <button id="register" class="btn btn-primary btn-lg text-uppercase my-3 text-center" onclick="return confirmation()" type="submit">Register</button>
                            </div>
                        </form>
                        
<!-----------------------------END OF FORM----------------------------->                        
        
                    </div>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>