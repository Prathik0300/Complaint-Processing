
function confirmation(){
    window.location = "index.html";
}

var myConfirm = new function(){
    
    this.show = function(msg,callback){
        document.getElementById("alert-message").style.top="-30rem";
        document.getElementById("alert-message").style.display="block";
        document.getElementById("freezelayer").style.zIndex="2";
        document.getElementById("signIn-row").style.zIndex="1";
        this.callback = callback;
    };
    
    this.okay = function(){
        this.callback();
        this.close();
    };
    
    this.close =function(){
        document.getElementById("alert-message").style.top="-32rem";
        document.getElementById("alert-message").style.display="none";
        document.getElementById("freezelayer").style.zIndex="1";
        document.getElementById("signIn-row").style.zIndex="2";
    }
}