<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Untitled document</title> 
        <link href="../css/signup.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    </head>

    <body>
        <div class="signup">
         <form>
            <h2 style="color:#fff;">Sign Up </h2>
            
            <input type="text" name="username" placeholder="First name"> <br><br>
            <input type="text" name="username" placeholder="Last name"> <br><br>
            <input type="text" placeholder="Email address"> <br><br>
            <input type="tel"  name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
            <input type="text" name="H_No" placeholder="Home_no" Required><br><br>
            <input type="text" name="Street" placeholder="Street" Required><br><br>
            <input type="text" name="City" placeholder="City" Required><br><br>
            <input type="password" name="pass" placeholder="Password"> <br><br>
            <input type="password" name="pass" placeholder="Confirm Password"> <br><br>  
            <input type="button" value="Sign up" onclick="myFunction()"> <br><br>
            <div id="msg">Congratulations you sign up successfully !!!</div>

            <script>
                function myFunction()
                {
                    var x=document.getElementById("msg");
                    x.className="show";
                    setTimeout(function()
                    {
                        x.className=x.className.replace("show","");
                    },3000);
                }
            </script>
            Already have an account? <a href="login.php" style="text-decoration:none; font-family:'Play',sans-serif; color:yellow;">&nbsp;Log In</a>
         </form>
        </div>
    </body>
</html>
 