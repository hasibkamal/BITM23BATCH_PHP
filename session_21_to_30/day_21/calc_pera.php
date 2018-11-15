<html>
    <head>
        <title>This is title</title>
        <script type="text/javascript">
            function calc(sign){
                var first =  document.getElementById('first_number').value;
                var second = document.getElementById('second_number').value;
                
                var result = eval(first +sign+second);
                
                document.getElementById('res').value = result;
                
            }
        </script>
    </head>
    <body>
        <table>
            <tr>
                <td><input type="number" id="first_number"></td>
                <td><input type="number" id="second_number"></td>
            </tr>
            <tr>
                <td>
                    <input onclick="calc(this.value)" type="button" value="+">
                    <input onclick="calc(this.value)" type="button" value="-">
                </td>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" id="res"></td>
                <td></td>
            </tr>
        </table>
    </body>
</html>