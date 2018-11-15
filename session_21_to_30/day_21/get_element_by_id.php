<html>
    <head>
        <title>Tests</title>
        <script type="text/javascript">
            function myText(){
                var name = document.getElementById('text').value;
                alert(name);
            }
        </script>
    </head>
    
    Name : <input type="text" id="text">
    <input type="button" onclick="myText()" value="Click">
</html>