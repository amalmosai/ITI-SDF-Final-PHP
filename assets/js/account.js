//////////////////SIGN UP //////////////////////
submit.addEventListener('click', function(){
        var fName = document.getElementById('firstName');
        var user_name = document.getElementById('user_name');
        var  email=document.getElementById('email');
        var pass=document.getElementById("password");
        var  error_pass=document.getElementById('error_pass');
        var error_email= document.getElementById('error_email')
        // var pattern = /^[a-z0-9]((\.|\+)?[a-z0-9]){5,}@g(oogle)?mail\.com$/
        
        if(fName.value==="")
        {
            fName.style.border="2px solid red";
        }else 
            
        
            if(user_name.value==="")
            {
                fName.style.border="green 2px solid";
                user_name.style.border="red 2px solid";
            }
            else if(!email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) || email.value == "")
            {    
                user_name.style.border="green 2px solid";
                email.style.border="red 2px solid";
                error_email.innerHTML= "please enter a correct email"
                error_email.style.color= "red"
                return
            }
            else 
        if(pass.value.length<8)
        {   
            error_email.style.display="none"
            email.style.border="green 2px solid"
            pass.style.border="red 2px solid";
            error_pass.innerHTML="the password must be more than 8 characters";
            error_pass.style.color="red"
            return; 
        }
        else
        {   
            error_pass.style.display= "none"
            pass.style.border='2px green solid';
            email.style.border='1px black solid';
            error_email.display='none';
            localStorage.setItem("userName",user_name   .value);
            localStorage.setItem('email',email.value);
            localStorage.setItem('password',pass.value);
            alert('your account has been registered successfully')
        }
    
    })



/////////Send message /////////////////////////////
function sendMessage()
{   

    let message = document.getElementById('message');
    if(message.value=="")
    {
        message.style.border="red 2px solid";;
    }else{
        message.style.border="black 2px solid";
    }
}

