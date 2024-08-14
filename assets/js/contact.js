function Savecontact(){
    var fullname=document.getElementById("fullname");
    var email=document.getElementById("email");
    var message=document.getElementById("message");
    localStorage.setItem("fullname",fullname.value);
    localStorage.setItem("email",email.value);
    localStorage.setItem("yourmessage",message.value)

}