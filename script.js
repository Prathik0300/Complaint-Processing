/************************FOR SIGN IN PAGE**********************/

function empty(){
    
    var username = document.getElementById("resetLink");
    username.value = "";
}

/*************************FOR SIGN UP PAGE**********************/

function confirmation(){
    
var emailId = document.getElementById("setUsername").value;
var pass = document.getElementById("setPassword").value;
var retypePass = document.getElementById("retypePassword").value;
var cpf = document.getElementById("cpf").value;
var quarterNo = document.getElementById("quarterNo").value;
var name = document.getElementById("Name").value;
var hvj = document.getElementById("hvj").value;
var errors = [];
    
    if ((/^[a-zA-Z]+\s?[a-zA-Z]*$/.test(name))==false){
        var nameErr = "Name";
        errors.push(nameErr);
    }
    
    if((/^[1-9]{1}\d+$/.test(cpf))==false){
        var cpfErr = "CPF";
        errors.push(cpfErr);

    }
    
    if((/^[3]{1}\d{4}$/.test(hvj)) == false){
        var hvjErr = "HVJ";
        errors.push(hvjErr); 

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
        return true;
    }
    
   else{
       window.close(res);
       return false;

   }
    
}
    
    else{
        var l = errors.length;
        var error = "";
        for (var i=0;i<l;i++){
            error = error + "(" + errors[i] + ") ";
        }
        
        if (l==1){
            
        var errMsg = "Invalid value in " + error + " field. Rectify it and try again";
        
        var message = confirm(errMsg);
    
        if (message){
            
            window.close(message);
            return false;
        }
    
        else{
            return true            
        }
            
        }
        
        
        
        else{
            
        var errMsg = "Invalid values in " + error + " fields. Rectify it and try again";
        
        var message = confirm(errMsg);
    
        if (message){
            window.close(message);
            return false;
        }
    
        else{
            return true;            
        }
    }
        
    }
}

/**********************END OF SIGN UP PAGE***********************/

/***********************FOR MAIN PAGE****************************/

function createArray(that){
    var nextRow1 = document.getElementById("next1");
    var nextRow2 = document.getElementById("next2");
    var nextRow3 = document.getElementById("next3");
    var nextRow4 = document.getElementById("next4");
    
    var div1 = document.getElementById("row1");
    var div2 = document.getElementById("row2");
    var div3 = document.getElementById("row3");
    var div4 = document.getElementById("row4");
    var div5 = document.getElementById("row5");
    
    var select1 = document.getElementById("select1");
    var select2 = document.getElementById("select2");
    var select3 = document.getElementById("select3");
    var select4 = document.getElementById("select4");
    var select5 = document.getElementById("select5");
    
    var input1 = document.getElementById("input1").value;
    var input2 = document.getElementById("input2").value;
    var input3 = document.getElementById("input3").value;
    var input4 = document.getElementById("input4").value;
    var input5 = document.getElementById("input5").value;
    
    
    var nextButton = [nextRow1,nextRow2,nextRow3,nextRow4];
    var div = [div1,div2,div3,div4,div5];
    var select = [select1,select2,select3,select4,select5];
    var input = [input1,input2,input3,input4,input5];
    
    var Ind = nextButton.indexOf(document.getElementById(that.id));
    var toShow = div[Ind+1];
    
    if (select[Ind].value == "" || input[Ind].length==0){
        
        alert("Please fill this Field!");
    }
    
    else{
        
    toShow.style.display = "";  

    }
}

function deleteArray(that){
    
    var nextRow2 = document.getElementById("delete2");
    var nextRow3 = document.getElementById("delete3");
    var nextRow4 = document.getElementById("delete4");
    var nextRow5 = document.getElementById("delete5");
    
    
    var div2 = document.getElementById("row2");
    var div3 = document.getElementById("row3");
    var div4 = document.getElementById("row4");
    var div5 = document.getElementById("row5");
    
    var nextButton = [nextRow2,nextRow3,nextRow4,nextRow5];
    var div = [div2,div3,div4,div5];
    
    var Ind = nextButton.indexOf(document.getElementById(that.id));
     var toShow = div[Ind];
    if(Ind=="3"){
        
        var del1 = confirm("Are you sure you want to delete the complaint?");
        
        if (del1){
            toShow.style.display = "none";
            window.close(del1);
        }
        
        else{
            window.close(del1);
            
        }
    }
    
    else if(Ind != "3"){
         for (var i=Ind+1;i<=3;i++){
             
             if(div[i].style.display != "none"){
                 alert("Next row is still being used");
                 break;
             }
             else{
                 var del = confirm("Are you sure you want to delete the complaint?");
                 if (del){
                     toShow.style.display = "none";
                     break;
                 }
        
                 else{
                    window.close(del);
                    break;
                    }
             }
         }
    }
}


function submission(){
    var select1 = document.getElementById("select1");
    var select2 = document.getElementById("select2");
    var select3 = document.getElementById("select3");
    var select4 = document.getElementById("select4");
    var select5 = document.getElementById("select5");
    
    var input1 = document.getElementById("input1").value;
    var input2 = document.getElementById("input2").value;
    var input3 = document.getElementById("input3").value;
    var input4 = document.getElementById("input4").value;
    var input5 = document.getElementById("input5").value;
    
    if( (select1.value=="" || input1.length<1) || (select2.style.display=="" && (select2.value=="" || input2.length<1)) || (select3.style.display=="" && (select3.value=="" || input3.length<1)) || (select3.style.display=="" && (select3.value=="" || input3.length<1)) || (select4.style.display=="" && (select4.value=="" || input4.length<1)) || (select5.style.display=="" && (select5.value=="" || input5.length<1)))
    {
        var err = window.alert("You have not filled all the fields!");
        return false;
    }
    
    else{
        return true;
    }
    
}
/**************************END OF MAIN PAGE*********************/