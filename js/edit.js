function change(){
    document.getElementById("submit").style.visibility = "visible";
    document.getElementById("editbutton").style.display = "none";
    document.getElementById("fname").readOnly = false;
    document.getElementById("mname").readOnly = false;
    document.getElementById("lname").readOnly = false;
    document.getElementById("contact").readOnly = false;
    document.getElementById("email").readOnly = false;
    document.getElementById("username").readOnly = false;
    document.getElementById("fname").focus();
}