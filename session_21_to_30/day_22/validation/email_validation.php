<html>
    <head>
        <title>Email Validation</title>
        <script type="text/javascript">
            function email_validation(){
                var email = document.myform.email.value;
                var emailreg = /[a-z,0-9,_,.]+@+[a-z,0-9]+\.+[a-z]{2,3}/;
                if(email.match(emailreg)){
                    return true;
                }else{
                    alert('Check @ .com');
                }
            }
        </script>
    </head>
    <body>
        <form name="myform" action="" method="post" onsubmit="return email_validation()">
            Email : <input type="text" name="email">
            <input type="submit" name="sumbit";
            
            
        </form>
    </body>
</html>