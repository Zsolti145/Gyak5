let input = document.getElementById("input-field");

function hideInput(){
    input.style.transition = "1s";
    input.style.top = "-50%";
}

function showInput(){
    input.style.transition = "1s";
    input.style.top = "50%";
}