<?php
session_start();
require_once "PDO.php";

if(!isset($_SESSION['name'])){
    die("NOT LOGGED IN");
}

if(isset($_POST['sector1']) && isset($_POST['desc1']) && isset($_POST['sector2']) && isset($_POST['desc2']) && isset($_POST['sector3']) && isset($_POST['desc3']) && isset($_POST['sector4']) && isset($_POST['desc4']) && isset($_POST['sector5']) && isset($_POST['desc5'])){
    $sql = "INSERT INTO complaints(fullname,cpf,hvj,kunj,quarter,sector1,desc1,sector2,desc2,sector3,desc3,sector4,desc4,sector5,desc5) VALUES (:name,:cpf,:hvj,:kunj,:quarter,:sector1,:desc1,:sector2,:desc2,:sector3,:desc3,:sector4,:desc4,:sector5,:desc5)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':name'=>$_SESSION['name'],
        ':cpf'=>$_SESSION['cpf'],
        ':hvj'=>$_SESSION['hvj'],
        ':kunj'=>$_SESSION['kunj'],
        ':quarter'=>$_SESSION['quarter'],
        ':sector1'=>$_POST['sector1'],
        ':desc1'=>$_POST['desc1'],
        ':sector2'=>$_POST['sector2'],
        ':desc2'=>$_POST['desc2'],
        ':sector3'=>$_POST['sector3'],
        ':desc3'=>$_POST['desc3'],
        ':sector4'=>$_POST['sector4'],
        ':desc4'=>$_POST['desc4'],
        ':sector5'=>$_POST['sector5'],
        ':desc5'=>$_POST['desc5'],
    ));
    
    $_SESSION['success']="Successfully submitted";
    header("Location: main.php");
    return;
}

elseif(isset($_POST['sector1']) && isset($_POST['desc1']) && isset($_POST['sector2']) && isset($_POST['desc2']) && isset($_POST['sector3']) && isset($_POST['desc3']) && isset($_POST['sector4']) && isset($_POST['desc4']) && !isset($_POST['sector5']) && !isset($_POST['desc5'])){
    
     $sql = "INSERT INTO complaints(fullname,cpf,hvj,kunj,quarter,sector1,desc1,sector2,desc2,sector3,desc3,sector4,desc4) VALUES (:name,:cpf,:hvj,:kunj,:quarter,:sector1,:desc1,:sector2,:desc2,:sector3,:desc3,:sector4,:desc4)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':name'=>$_SESSION['name'],
        ':cpf'=>$_SESSION['cpf'],
        ':hvj'=>$_SESSION['hvj'],
        ':kunj'=>$_SESSION['kunj'],
        ':quarter'=>$_SESSION['quarter'],
        ':sector1'=>$_POST['sector1'],
        ':desc1'=>$_POST['desc1'],
        ':sector2'=>$_POST['sector2'],
        ':desc2'=>$_POST['desc2'],
        ':sector3'=>$_POST['sector3'],
        ':desc3'=>$_POST['desc3'],
        ':sector4'=>$_POST['sector4'],
        ':desc4'=>$_POST['desc4'],
    ));
    
    $_SESSION['success']="Successfully submitted";
    header("Location: main.php");
    return;
}

elseif(isset($_POST['sector1']) && isset($_POST['desc1']) && isset($_POST['sector2']) && isset($_POST['desc2']) && isset($_POST['sector3']) && isset($_POST['desc3']) && !isset($_POST['sector4']) && !isset($_POST['desc4']) && !isset($_POST['sector5']) && !isset($_POST['desc5'])){
    
    $sql = "INSERT INTO complaints(fullname,cpf,hvj,kunj,quarter,sector1,desc1,sector2,desc2,sector3,desc3) VALUES (:name,:cpf,:hvj,:kunj,:quarter,:sector1,:desc1,:sector2,:desc2,:sector3,:desc3)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':name'=>$_SESSION['name'],
        ':cpf'=>$_SESSION['cpf'],
        ':hvj'=>$_SESSION['hvj'],
        ':kunj'=>$_SESSION['kunj'],
        ':quarter'=>$_SESSION['quarter'],
        ':sector1'=>$_POST['sector1'],
        ':desc1'=>$_POST['desc1'],
        ':sector2'=>$_POST['sector2'],
        ':desc2'=>$_POST['desc2'],
        ':sector3'=>$_POST['sector3'],
        ':desc3'=>$_POST['desc3'],
    )); 
    
    $_SESSION['success']="Successfully submitted";
    header("Location: main.php");
    return;
}

elseif(isset($_POST['sector1']) && isset($_POST['desc1']) && isset($_POST['sector2']) && isset($_POST['desc2']) && !isset($_POST['sector3']) && !isset($_POST['desc3']) && !isset($_POST['sector4']) && !isset($_POST['desc4']) && !isset($_POST['sector5']) && !isset($_POST['desc5'])){
    
$sql = "INSERT INTO complaints(fullname,cpf,hvj,kunj,quarter,sector1,desc1,sector2,desc2) VALUES (:name,:cpf,:hvj,:kunj,:quarter,:sector1,:desc1,:sector2,:desc2)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':name'=>$_SESSION['name'],
        ':cpf'=>$_SESSION['cpf'],
        ':hvj'=>$_SESSION['hvj'],
        ':kunj'=>$_SESSION['kunj'],
        ':quarter'=>$_SESSION['quarter'],
        ':sector1'=>$_POST['sector1'],
        ':desc1'=>$_POST['desc1'],
        ':sector2'=>$_POST['sector2'],
        ':desc2'=>$_POST['desc2'],
    ));
    
    $_SESSION['success']="Successfully submitted";
    header("Location: main.php");
    return;
}

elseif(isset($_POST['sector1']) && isset($_POST['desc1']) && !isset($_POST['sector2']) && !isset($_POST['desc2']) && !isset($_POST['sector3']) && !isset($_POST['desc3']) && !isset($_POST['sector4']) && !isset($_POST['desc4']) && !isset($_POST['sector5']) && !isset($_POST['desc5'])){
    
    $sql = "INSERT INTO complaints(fullname,cpf,hvj,kunj,quarter,sector1,desc1) VALUES (:name,:cpf,:hvj,:kunj,:quarter,:sector1,:desc1)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':name'=>$_SESSION['name'],
        ':cpf'=>$_SESSION['cpf'],
        ':hvj'=>$_SESSION['hvj'],
        ':kunj'=>$_SESSION['kunj'],
        ':quarter'=>$_SESSION['quarter'],
        ':sector1'=>$_POST['sector1'],
        ':desc1'=>$_POST['desc1'],
        
    ));
    
    $_SESSION['success']="Successfully submitted";
    header("Location: main.php");
    return;
}

?>


<!----------------------------------------------------------------HTML CODE------------------------------------------->

<!DOCTYPE html5>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
        
        <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
        <title>Complaint</title>
    </head>
    
    
    
    
    <body class="d-flex flex-column min-vh-100">
    
        <nav class="navbar navbar-expand-md bg-warning navbar-dark fixed-top">
            <a style="max-width:300px;" class="navbar-brand" href="main.php">
                <img style="width:100%;" src="assets/gail%20img.jpg">
            </a>
            
            <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#signoutDiv">
                <span class="navbar-toggler-icon bg-primary"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end mr-auto" id="signoutDiv">
                
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="logout.php">SIGN OUT</a>
                </div>
            </div>
        </nav>
        
        
        <div style="font-size:1.3rem;" class="mt-5 text-center">
        
             <?php
            if(isset($_SESSION['success'])){
                echo('<p style="color:green">'.$_SESSION['success']."</p>");
                unset($_SESSION['success']);
            }
            if(isset($_SESSION['error'])){
                echo('<p style="color:red">'.$_SESSION['error']."</p>");
                unset($_SESSION['error']);
            }
        
        ?>
        
        
        </div>
       
        
        <div id="heading" class="container col-sm-6 text-center">
            COMPLAINT SECTION
        </div>
        
        <!----------------------------FORM--------------------------->
        
        
        <form class="d-flex flex-column min-vh-100" method="post">
        
        <div id="mainDiv" class="container-fluid my-5 wrapper flex-grow-1">
                    
                    <!--THIS IS ROW 1 -->
            
            <div class="form-row text-center text-center" id="row1">

                <div class="form-group col-lg-3">
                    <select class="form-control text-center" id="select1" name="sector1">
                        <option hidden value=""></option>
                        <option value="Electrical">Electrical</option>
                        <option value="HR">HR</option>
                        <option value="Civil">Civil</option>
                        <option value="Horticulture">Horticulture</option>
                        <option value="Telecom">Telecom</option>
                    </select>
                </div>
            
                <div class="form-group col-lg-3">
                    <input type="text" class="form-control text-center" id="input1" placeholder="DESCRIPTION" name="desc1" >
                </div>
                
                <div class="form-group col-lg-4">
                    <button class="col-lg-6 btn btn-primary form-control" type="button" id="next1" onclick="createArray(this)">NEXT</button>
                </div>
                
            </div>
                        <!--END OF ROW 1-->
           
        
                    <!-- THIS IS ROW 2-->
            <div class="form-row text-center text-center" id="row2" style="display: none;">

                <div class="form-group col-lg-3">
                    <select class="form-control text-center" id="select2" name="sector2">
                        <option hidden value=""></option>
                        <option value="Electrical">Electrical</option>
                        <option value="HR">HR</option>
                        <option value="Civil">Civil</option>
                        <option value="Horticulture">Horticulture</option>
                        <option value="Telecom">Telecom</option>
                    </select>
                </div>
            
                <div class="form-group col-lg-3">
                    <input type="text" class="form-control text-center" id="input2" placeholder="DESCRIPTION" name="desc2">
                </div>
                
                <div class="form-group col-lg-2">
                    <button class="btn btn-primary form-control" type="button" id="next2" onclick="createArray(this)">NEXT</button>
                </div>
                
                <div class="form-group col-lg-2">
                    <button class="btn btn-primary form-control" type="button" id="delete2" onclick="deleteArray(this)">DELETE</button>
                </div>
            </div>
            
                        <!-- END OF ROW 2-->
                        
                    <!-- THIS IS ROW 3-->
            <div class="form-row text-center text-center" id="row3" style="display: none;" >

                <div class="form-group col-lg-3">
                    <select class="form-control text-center" id="select3" name="sector3">
                        <option hidden value=""></option>
                        <option value="Electrical">Electrical</option>
                        <option value="HR">HR</option>
                        <option value="Civil">Civil</option>
                        <option value="Horticulture">Horticulture</option>
                        <option value="Telecom">Telecom</option>
                    </select>
                </div>
            
                <div class="form-group col-lg-3">
                    <input type="text" class="form-control text-center" id="input3" placeholder="DESCRIPTION" name="desc3">
                </div>
                
                <div class="form-group col-lg-2">
                    <button class="btn btn-primary form-control" type="button" id="next3" onclick="createArray(this)" >NEXT</button>
                </div>
                
                <div class="form-group col-lg-2">
                    <button class="btn btn-primary form-control" type="button" id="delete3" onclick="deleteArray(this)">DELETE</button>
                </div>
            </div>
            
                        <!--END OF ROW 3-->
            
                    <!--THIS IS ROW 4-->
            
            <div class="form-row text-center text-center" id="row4" style="display: none;">

                <div class="form-group col-lg-3">
                    <select class="form-control text-center" id="select4" name="sector4">
                        <option hidden value=""></option>
                        <option value="Electrical">Electrical</option>
                        <option value="HR">HR</option>
                        <option value="Civil">Civil</option>
                        <option value="Horticulture">Horticulture</option>
                        <option value="Telecom">Telecom</option>
                    </select>
                </div>
            
                <div class="form-group col-lg-3">
                    <input type="text" class="form-control text-center" id="input4" placeholder="DESCRIPTION" name="desc4">
                </div>
                
                <div class="form-group col-lg-2">
                    <button class="btn btn-primary form-control" type="button" id="next4" onclick="createArray(this)">NEXT</button>
                </div>
                
                
                <div class="form-group col-lg-2">
                    <button class="btn btn-primary form-control" type="button" id="delete4" onclick="deleteArray(this)">DELETE</button>
                </div>
            </div>
            
                        <!--END OF ROW 4-->
            
                    <!-- THIS IS ROW 5-->
            
            <div class="form-row text-center text-center" id="row5" style="display: none;">

                <div class="form-group col-lg-3">
                    <select class="form-control text-center" id="select5" name="sector5">
                        <option hidden value=""></option>
                        <option value="Electrical">Electrical</option>
                        <option value="HR">HR</option>
                        <option value="Civil">Civil</option>
                        <option value="Horticulture">Horticulture</option>
                        <option value="Telecom">Telecom</option>
                    </select>
                </div>
            
                <div class="form-group col-lg-3">
                    <input type="text" class="form-control text-center" id="input5" placeholder="DESCRIPTION" name="desc5">
                </div>
                
                
                <div class="form-group col-lg-4">
                    <button class="col-lg-6 btn btn-primary form-control" type="button" id="delete5" onclick="deleteArray(this)">DELETE</button>
                </div>
            </div>
            
                        <!-- END OF ROW 5-->
            
            <div id="submitDiv" class="text-center my-5">
                <button type="submit" class="form-control btn btn-primary" id="submitButton">SUBMIT</button> 
            </div>
        </div>
    </form> 
        
        
        <!-----------------------END OF FORM--------------------------->
            
        <footer id="footer" style="bottom:0;" class="footer py-3 px-5 bg-dark text-white text-center">
            <div id="contact" class="contianer">
                <span>Email us at : <a href="mailto:abcd@gmail.com" target="_blank">abcd@gmail.com</a></span>
            </div>
            
            <div class="contianer">
                <small>Copyright &copy; Complaint Processing</small>
            </div>
            <div class="container py-2 ">
                <a class="fa fa-facebook" href="https://www.facebook.com/GAILIndia" target="_blank"></a>
                <a class="fa fa-twitter" href="https://twitter.com/gailindia" target="_blank"></a>
                <a class="fa fa-youtube" href="https://www.youtube.com/user/GAILSocialTV" target="_blank"></a>
                <a class="fa fa-linkedin" href="https://www.linkedin.com/company/gail-india-limited/" target="_blank"></a>      
            </div>
        </footer>
    </body>
</html>