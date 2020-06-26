function confirmation(){
    
var emailId = document.getElementById("setUsername").value;
var pass = document.getElementById("setPassword").value;
var retypePass = document.getElementById("retypePassword").value;
var cpf = document.getElementById("cpf").value;
var quarterNo = document.getElementById("quarterNo").value;
var name = document.getElementById("Name").value;
var errors = [];
    
    if ((/^[a-zA-Z]+\s?[a-zA-Z]*$/.test(name))==false){
        var nameErr = "Name";
        errors.push(nameErr);
    }
    
    if((/^[1-9]{1}\d+$/.test(cpf))==false){
        var cpfErr = "CPF";
        errors.push(cpfErr);
    }
    
   if((/^\w+([-\.]\w)*[@]{1}[a-zA-Z]+[\.]{1}[A-Za-z]{2,3}$/).test(emailId)==false){
        var emailErr = "Email ID";
        errors.push(emailErr);
    }
    
    if(pass !== retypePass){
        var passErr = "Passwords";
        errors.push(passErr);
    }
    
    if((/^[1-9]{1}\d+$/.test(quarterNo))==false){
        var quarterErr = "Quarter No";
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
            error = error + "(" + errors[i] + ") ";
        }
        
        if (l==1){
            
        var errMsg = "There is error in " + error + " field. Rectify it and try again";
        
        var message = confirm(errMsg);
    
        if (message){
            window.close(message);
        }
    
        else{
            window.open("index.html","_self");
            
        }
            
        }
        
        
        
        else{
            
        var errMsg = "There are errors in " + error + " fields. Rectify it and try again";
        
        var message = confirm(errMsg);
    
        if (message){
            window.close(message);
        }
    
        else{
            window.open("index.html","_self");
            
        }
    }
        
    }
}





function next(){
    
    var nextButton = document.getElementById("nextButton");
    nextButton.addEventListener("click",createNew());
}

function createNew(){
    
    var container = document.getElementById("complaintRow");
    //container.setAttribute("class","container");
    var newRow = container.insertRow;
    //newRow.setAttribute("class","form-row");
    var select = document.createElement("SELECT");
    select.setAttribute("id","complaintList");
    select.setAttribute("class","form-group");
    select.setAttribute("class","col-sm-4");
    document.body.appendChild(select);
    
    var option = document.createElement("option");
    option.setAttribute("value", "Electrical");
    var value = document.createTextNode("Electrical");
    option.appendChild(value);
    document.getElementById("complaintList").appendChild(option);
}


function text(){
    
    if(document.getElementById("electricalList").value == "Other"){
    document.getElementById("ElectricalComp").style.display = "block";
}
}
