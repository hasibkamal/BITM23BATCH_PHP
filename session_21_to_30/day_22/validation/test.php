<html>
    <head>
        <title>Js Validation</title>
        <script type="text/javascript">
            function validation(){
                var name = document.myform.name.value;
                var phone = document.myform.phone.value;
                var password = document.myform.password.value;
                
                
                var namereg = /^[a-z,A-Z]/;
                var phonereg = /^[0-9]/;
                if(name === '' || name === null){
                    alert('Name field is empty');
                    return false;
                    if(name.match(namereg)){
                        return true;
                    }else{
                        alert('Please Input valid name');
                        return false;
                    }
                }else if(phone === '' || phone === null){
                    alert('Phone Field is empty');
                    return false;
                    if(phone.match(phonereg)){
                        return true;
                    }else{
                        alert('Please Input valid Phone Number');
                        return false;
                    }
                }else if(password == '' || password === null){
                    alert('Password field is empty');
                    return false;
                    if(password.length>=6){
                        return true;
                    }else{
                        alert('Password lenght must be more than 6');
                    }
                }
            }
        </script>
    </head>
    <body>
        <form name="myform" action="" method="post" onsubmit="return validation()">
            <table>
                <tr>
                    <td>Name  :</td>
                    <td><input type="text" name="name"></td>
                    <td><span></span></td>
                </tr>
                <tr>
                    <td>Phone  :</td>
                    <td><input type="text" name="phone"></td>
                    <td><span></span></td>
                </tr>
                <tr>
                    <td>Password  :</td>
                    <td><input type="text" name="password"></td>
                    <td><span></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>