<html>
    <head>
        <title>Name Validation</title>
        <script>
            function nameValid(){
                var name = document.myform.name.value;
                if(name === '' || name === null){
                    alert('Name input cannot be Blank');
                    return;
                }
            }
        </script>
    </head>
    <body>
        <form name="myform" action="" method="post" onsubmit="return nameValid()">
            Name : <input type="text" name="name">
            <input type="submit">
        </form>
    </body>
</html>