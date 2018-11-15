<html>
    <head>
        <title>Title</title>
        <script type="text/javascript">
            function passwordText(){
                var pass = document.getElementById('pass').value.length;
                if(pass<=3){
                    document.getElementById('res').innerText = 'Poor';
                }else if(pass>=5){
                    document.getElementById('res').innerText = 'Strong';
                }else{
                    document.getElementById('res').innerText = 'Good';
                }
            }
        </script>
    </head>
    <body>
        Password : <input type="text" id="pass" onkeyup="passwordText()">
        <span id="res"></span>
    </body>
</html>