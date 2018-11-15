<html>
    <head>
        <title>Name Validation</title>
        <script>
            function passwordValid(){
                var password = document.myform.password.value;
                if(password === '' || password === null){
                    alert('Password Field cant be empty');
                    return false;
                }else if(password.length <=5){
                    alert('Password Length Must be 6 Character !!!');
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <form name="myform" action="" method="post" onsubmit="return passwordValid()">
            Name : <input type="text" name="password">
            <input type="submit">
        </form>
    </body>
</html>