<html>
    <head>
        <title>Tests</title>
        <script type="text/javascript">
            function myText(){
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var phone = document.getElementById('phone').value;
                
                
                document.getElementById('uname').value = name;
                document.getElementById('uemail').value = email;
                document.getElementById('uphone').value = phone;
                
                
            }
            
            
        </script>
    </head>
    
    <table>
        <tr>
            <td>Name : </td>
            <td><input type="text" id="name"></td>
        </tr>
        
        <tr>
            <td>Email : </td>
            <td><input type="text" id="email"></td>
        </tr>
        
        <tr>
            <td>Phone : </td>
            <td><input type="text" id="phone"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="button" onclick="myText()" value="Click"></td>
        </tr>
    </table>
    
    <table>
        <tr>
            <td>User Inputed Name:</td>
            <td><input type="text" id="uname"></td>
        </tr>
        <tr>
            <td>User Inputed Email :</td>
            <td><input type="text" id="uemail"></td>
        </tr>
        <tr>
            <td>User Inputed Phone : </td>
            <td><input type="text" id="uphone"></td>
        </tr>
    </table>
    
    
    
</html>