<?php
include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="logo">
    <img src="images/DC-LOGO.png" alt="">
    </div>
    <div>
        <form action="index.php" method="POST">
            <fieldset>
                <legend class="login_image">Login Panel</legend>
                <div class="form-align">
            <label for="User">User</label>
            <input type="text" name="username" class="user" placeholder="User Id"><br>
            <label for="Password" name="password">Password</label>
            <input type="password" name="password" class="password" placeholder="Password"><br>
            <button type="submit" value="submit">Submit</button>
            <button type="reset" value="reset">Reset</button>
                </div>
        </fieldset>



        </form>
    </div>
    // validation for empty field   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>


    </form>
    
    



</body>
</html>