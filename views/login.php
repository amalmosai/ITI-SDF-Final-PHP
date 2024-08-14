



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/login.css">
    <title>log in</title>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: “Roboto”;
    outline: none;
    border: none;
}
html, body {
    height: 100%;
    background: #181717;
}

.align {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding-bottom: 8px;
}

.card {
    margin-top: 28px;
    height: 100%;
    max-height: 446px;
    /* width: 396px; */
    background: #313030;
    border: none;
    box-shadow: 0 0 10px 0  rgb(10, 10, 10) , 0 0 10px 0 rgb(0, 0, 0);
    border-radius: 10px;
    overflow: hidden;
    transition: max-height 0.2s;
}
.extend {
    max-height: 480px;
}
.head {
    width: 100%;
    display: flex;
    height: 72px;
    border-bottom: 1px solid #373737;
    justify-content: space-around;
}

.head a {
    height: 100%;
    padding: 0 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgb(140, 140, 140);
        font-size: 20px;
        font-weight: 500;
    }
   
.head .selected {
        position: relative;
        color: #a4c63b;
        font-weight: 700;
    }
    
.head .selected:after {
        position: absolute;
        content: "";
        bottom: 0;
        left: 0;
        height: 5px;
        width: 100%;
        background: #a4c63b;
        border-radius: 99px 99px 0 0;
    }
     
.tabs {
        height: calc(100% – 72px);
        display: flex;
    }
    
form {
        width: 100%;
        height: 100%;
        flex-shrink: 0;
        padding: 44px 38px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        position: relative;
        right: 0;
        transition: right 0.2s;
    }
    


.inputs {
        width: 100%;
        padding-top: 6px;
    }
    
.input {
        position: relative;
        margin-bottom: 20px;
        width: 100%;
        display: flex;
        align-items: center;
    }
    
.input input {
        width: 100%;
        font-size: 17px;
        background: #1C1C1C;
        border-radius: 8px;
        padding: 16px 18px 16px 51px;
            color: rgb(220, 220, 220);
        }
        
.checkbox {
            height: 40px;
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
        }
        
.checkbox span {
            display: flex;
            align-items: center;
            color: rgb(110, 110, 110);
            font-size: 16px;
            user-select: none;
        }
        
.checkbox input {
            /* width: 22px; */
            /* height: 22px; */
            border-radius: 6px;
            margin-right: 16px;
                background-color: #1C1C1C;
        }
.card button {
        display: block;
        background: #a4c63b;
        padding: 14px 52px;
        border-radius: 12px;
        color: #003B15;
        font-weight: 700;
        font-size: 21px;
        cursor: pointer;
}         

    </style>

</head>
<body>
    <div class="align">
        <div class="card ">
            <div class="head ">
                
                <a class="selected" href="index.php?action=login">Login</a>
                <a href="index.php?action=signuppage">Register</a>
            </div> 
            <div class="tabs ">
                <form action="index.php?action=loginrequest" method="post" >
                    <?php
                    if(isset($_GET["error"]))
                    {
                    echo "

                    <p style ='color:red'>enter valid email and password</p>
                    ";

                    }
                    
                    ?>
                    <div class="inputs">
                    <?php
                    if(isset($_GET['added']))
                    {
                        echo" <p style='color:#a4c63b'>  Account Added successfully </p>";

                    }
                    ?>
                        
                            <div class="input">
                                <input id="email" name="email" placeholder="Email" type="email"   required>
                            </div>
                            <div class="input">
                                <input id="pass" name="password" placeholder="Password" type="password"   required>
                            </div>
                            <!-- <label class="checkbox">
                                <input type="checkbox" name="remember">
                                <span>Remember me</span>
                            </label> -->
                    </div>
                    <button type="submit" id="loginBtn" name="login">Login</button>
                </form> 
                

    </div>   
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="assets/js/login.js?v=<?php echo time(); ?>"></script>
</body>

</html> 