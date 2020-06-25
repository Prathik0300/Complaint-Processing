function confirmation(){
    
var emailId = document.getElementById("setUsername").value;
var pass = document.getElementById("setPassword").value;
var retypePass = document.getElementById("retypePassword").value;
var cpf = document.getElementById("cpf").value;
var quarterNo = document.getElementById("quarterNo").value;
var name = document.getElementById("Name").value;
var errors = [];
    
    if ((/^[a-zA-Z]+\s?[a-zA-Z]*$/.test(name))==false){
        var nameErr = "Name Invalid";
        errors.push(nameErr);
    }
    
    if((/^[1-9]{1}\d+$/.test(cpf))==false){
        var cpfErr = "CPF value invalid!";
        errors.push(cpfErr);
    }
    
   if((/^\w+([-\.]\w)*[@]{1}[a-zA-Z]+[\.]{1}[A-Za-z]{2,3}$/).test(emailId)==false){
        var emailErr = "Email entered Invalid";
        errors.push(emailErr);
    }
    
    if(pass !== retypePass){
        var passErr = "Passwords are not same!";
        errors.push(passErr);
    }
    
    if((/^[1-9]{1}\d+$/.test(quarterNo))==false){
        var quarterErr = "Quarter No is invalid!";
        errors.push(quarterErr);
    }
    
    
    
    if (errors.length==0){

    var msg = "Are you sure to continue with the Email-ID : " + emailId.toLowerCase();    
    var res = confirm(msg);
    
    if (res){
     window.open("index.html","_self");
    }
    
   else{
       window.close(res);
   }
    
}
    
    else{
        var l = errors.length;
        var error = "";
        for (var i=0;i<l;i++){
            error = error + errors[i] + " ";
        }
        
        var errMsg = "There are " + error + " errors. Rectify it and try again";
        
        var message = confirm(errMsg);
    
        if (message){
            window.close(message);
        }
    
        else{
            window.open("index.html","_self");
            
        }
        
    }
}