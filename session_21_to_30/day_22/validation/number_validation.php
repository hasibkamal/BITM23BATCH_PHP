<html>
    <head>
        <title>Number Validation</title>
        <script>
            function numberValid(){
                var phone = document.myform.phone.value;
                if(isNaN(phone)){
                    document.getElementById('res').innerHTML = 'Please input number';
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <form name="myform" action="" method="post" onsubmit="return numberValid()">
            Phone: <input type="text" name="phone">
            <input type="submit">
        </form>
        <span id="res">
            
        </span>
    </body>
</html>