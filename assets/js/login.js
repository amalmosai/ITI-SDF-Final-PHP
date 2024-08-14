loginBtn.addEventListener('click', function(){
    var user=document.getElementById("user");
    var pass=document.getElementById("pass");
    var localuser=localStorage.getItem('userName');
    var localPass=localStorage.getItem('password');
    if(user.value!=localuser&&pass.value!=localPass)
    {
        user.style.border="red 2px solid";
        pass.style.border="red 2px solid"
        return ;
    }
    else
    {
        user.style.border='1px black solid';
        pass.style.border='1px black solid';
        
    }
})
