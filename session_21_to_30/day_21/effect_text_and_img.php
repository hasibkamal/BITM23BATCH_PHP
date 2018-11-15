<html>
    <head>
        <title>Text</title>
        <script type="text/javascript">
            var v = 0;
            function effectText(){
                if(v===0){
                    var a = document.getElementById('text');
                    var img = document.getElementById('img');
                    
                    a.style.color = 'red';
                    a.style.fontSize = '20px';
                    a.style.padding = '20px';
                    a.style.transition = '1s';
                    a.innerHTML = 'Hasib';
                    
                    
                    
                    img.src = 'img/logo_img.png';
                    v = 1;
                }else if(v===1){
                    var a = document.getElementById('text');
                    var img = document.getElementById('img');
                    
                    a.style.color = 'green';
                    a.style.fontSize = '30px';
                    a.style.padding = '50px';
                    a.style.transition = '1s';
                    a.innerHTML = 'Hasib Kamal';
                    
                    img.src = 'img/img_2.png';
                    
                    v = 2;
                }else if(v===2){
                    var a = document.getElementById('text');
                    var img = document.getElementById('img');
                    
                    a.style.color = 'gray';
                    a.style.fontSize = '40px';
                    a.style.padding = '80px';
                    a.style.transition = '1s';
                    a.innerHTML = 'Hasib Kamal Chowdhury';
                    
                    img.src = 'img/img_3.png';
                    
                    v = 3;
                }else if(v===3){
                    var a = document.getElementById('text');
                    var img = document.getElementById('img');
                    
                    a.style.color = 'black';
                    a.style.fontSize = '16px';
                    a.style.padding = '0px';
                    a.style.transition = '1s';
                    a.innerHTML = 'Click Here';
                    
                    img.src = '';
                    
                    v = 0;
                }
                
            }
        </script>
    </head>
    <body>
        <p id="text" onclick="effectText()">Click Here</p>
        <img height="100" width="100" alt="Image" id="img" />
    </body>
</html>