<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Untitled document</title> 
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    </head>

    <body>
        <div class="reset">
        <form>
            <h2 align="center" style="color:#fff;">Reset Password </h2>
            <input type="password" name="username" placeholder="Old password"/><br/><br/>
            <input type="password" name="username" placeholder="New password"/><br/><br/>
            <input type="password" name="username" placeholder="Confirm new password"/><br/><br/>
            <input type="button" value="Save" onclick="myFunction()"/><br/><br/>
            <a href="login.php" style="text-decoration:none;">Go back to Home page</a><br/><br/>

            <div id="msg">Your password changed successfully!!</div>
            
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
        </form>
        </div>
    </body>
</html>
 