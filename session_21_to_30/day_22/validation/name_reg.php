<html>
    <head>
        <title>Name Validation</title>
        <script>
            function nameRegValid(){
                var name = document.myform.name.value;
                var nameReg = /^[a-z,A-Z]/g;
                if(name.match(nameReg)){
                    return true;
                }else{
                    alert('Please Input a-z Character Only');
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <form name="myform" action="" method="post" onsubmit="return nameRegValid()">
            Name : <input type="text" name="name">
            <input type="submit">
        </form>
    </body>
</html>