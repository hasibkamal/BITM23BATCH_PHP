<!--equals = 'password'-->


<html>
    <head>
        <title>Confirm Password</title>
        <script>
            function checkPassword(){
                var password = document.myform.password.value;
                var repassword = document.myform.re_password.value;
                
                if(password == repassword){
                    return true;
                }else{
                    alert("Repassword must be as password");
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <form name="myform" action="" method="post" onsubmit="return checkPassword()">
            Password : <input type="password" name="password">
            Re-Password : <input type="password" name="re_password">
            <input type="submit" name="submit">
        </form>
    </body>
</html>