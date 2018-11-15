<html>
    <head>
        <title>Test</title>
        <script type="text/javascript">
            function inputgen(){
                var table = document.getElementById('table');
                var row = table.insertRow(1);
                var cell = row.insertCell(0);
                cell.innerHTML = 'Name : <input type="text" placeholder="ABC">';
            }
        </script>
    </head>
    <body>
        <button type="button" onclick="inputgen()">Generate</button>
        <table id="table">
            <tr>
                <td>Name : <input placeholder="Name" type="text" name="name[]"></td>
            </tr>
        </table>
    </body>
</html>