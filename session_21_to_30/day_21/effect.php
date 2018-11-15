<html>
    <head>
        <title>Text</title>
        <script type="text/javascript">
            var v = 0;
            function effectText(){
                if(v===0){
                    var a = document.getElementById('text');
                    a.style.color = 'red';
                    a.style.fontSize = '20px';
                    a.style.padding = '20px';
                    a.style.transition = '1s';
                    a.innerHTML = 'Hasib Kamal';
                    v = 1;
                }else if(v===1){
                    var a = document.getElementById('text');
                    a.style.color = 'green';
                    a.style.fontSize = '30px';
                    a.style.padding = '50px';
                    a.style.transition = '1s';
                    a.innerHTML = 'Hasib Kamal Chowdhury';
                    
                    v = 2;
                }else if(v===2){
                    var a = document.getElementById('text');
                    a.style.color = 'gray';
                    a.style.fontSize = '40px';
                    a.style.padding = '80px';
                    a.style.transition = '1s';
                    v = 3;
                }else if(v===3){
                    var a = document.getElementById('text');
                    a.style.color = 'black';
                    a.style.fontSize = '16px';
                    a.style.padding = '0px';
                    a.style.transition = '1s';
                }
                
            }
        </script>
    </head>
    <body>
        <p id="text">Hasib</p>
        <button onclick="effectText()" ondblclick="" type="button">Effect</button>
    </body>
</html>