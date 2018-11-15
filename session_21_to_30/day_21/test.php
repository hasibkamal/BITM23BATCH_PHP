<html>
    <head>
        <title>Javascritp Text</title>
        <script type="text/javascript">
            var a = 0;
            function comment(){
                if(a===0){
                    var comment = "<br>"+"Name : "+"<br>"+"<input type='text'>"+"<br>"+"Comment : "+"<br>"+"<textarea rows='20' cols='50'></textarea>"
                    document.getElementById('com').innerHTML = comment;
                    
                    a=1;
                }else{
                    document.getElementById('com').innerHTML = '';
                    a=0;
                }
                
            }
        </script>
    </head>
    <body>
        <button type="button" onclick="comment()">Comment</button>
        <span id="com"></span>
    </body>
</html>