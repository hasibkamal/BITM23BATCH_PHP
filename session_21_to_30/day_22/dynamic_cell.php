<html>
    <head>
        <title>Dynamic Cell</title>
        <script type="text/javascript">
            function dynamicCell(){
                var table = document.getElementById('tab');
                var row = table.insertRow(0);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                
                cell1.innerHTML = '<input type="text" placeholder="Name">';
                cell2.innerHTML = '<input type="text" placeholder="Email">';
            }
        </script>
    </head>
    <body>
        <button onclick="dynamicCell()">Click</button>
        <table id="tab">
            <tr>
                <td><input type="text" name="name[]" placeholder="Name"></td>
                <td><input type="text" name="email[]" placeholder="Email"></td>
            </tr>
            
        </table>
    </body>
</html>