<html>
    <head>
        <title>Tests</title>
        <script type="text/javascript">
            function myText(){
                var name = document.getElementById('text').value;
                document.getElementById('res').innerText = name;
            }
        </script>
    </head>
    
    Name : <input size="50" type="text" id="text" onkeyup="myText()"><br>
    <span id="res"></span>
</html>