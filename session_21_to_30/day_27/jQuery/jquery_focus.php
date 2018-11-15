<html>
    <head>
        <title>jQuery focus</title>
        <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function(){
                $('span').css('display','none');
                
                $('input').focus(function(){
                    $(this).next($('span').css('display','inline')).fadeOut(200);
                });
                
            });
        </script>
        Name : <input type="text" ><span>Please Enter Name please</span><br>
        Name : <input type="text" ><span>Please Enter Password please</span><br>
    </body>
</html>