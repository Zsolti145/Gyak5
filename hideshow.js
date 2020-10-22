let login = document.getElementById("login");

function hideLogin(){
    login.style.transition = "1s";
    login.style.top = "-50%";
}

function showLogin(){
    login.style.transition = "1s";
    login.style.top = "50%";
}
function checksignupform(){
let x_name = document.forms["signupform"]["user"].value;
let x_pwd = document.forms["signupform"]["pwd"].value;

   
 if(x_name == "" || x_pwd == ""){
     alert("Please fill out all the input fields!");
     return false;
 }
}

function checkLoginForm(){
    let y_name = document.forms["loginform"]["user"].value;
    let y_pwd = document.forms["loginform"]["pwd"].value;

if(y_name == "" || y_pwd == ""){
    alert("Please fill out all the input fields!");
    return false;
    }
}