var fullname = document.getElementById("Name").value
var cpfNo = document.getElementById("cpf").value
var quarterNo = document.getElementById("quarterNo").value
 
function isalpha(fullname){
    checker = /^[a-zA-Z]+$/;
    if (fullname.match(checker)){
        continue;
    }
    
    else{
        window.alert("Error");
    }
}