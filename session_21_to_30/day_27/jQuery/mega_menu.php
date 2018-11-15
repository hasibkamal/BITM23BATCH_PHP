<html>
    <head>
        <title>jQuery</title>
        <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('div').hide();
                
                $('#li1').click(function(){
                    $('#div1').toggle();
                    $('#div2').hide();
                    $('#div3').hide();
                });
                $('#li2').click(function(){
                    $('#div2').toggle();
                    $('#div1').hide();
                    $('#div3').hide();
                });
                $('#li3').click(function(){
                    $('#div3').toggle();
                    $('#div1').hide();
                    $('#div2').hide();
                });
            });
        </script>
        
        <style>
            ul{
                width: 100%;
                float: left;
                background-color: green;
                margin: 0px;
                padding: 0px;
            }
            ul li{
                width: 33.33%;
                float: left;
                background-color: wheat;
                line-height: 50px;
                list-style-type: none;
                margin: 0px;
                padding: 0px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <ul>
            <li id="li1">HOME</li>
            <li id="li2">CATEGORY</li>
            <li id="li3">GALLERY</li>
        </ul>
        <div id="div1" style="height: 400px; width: 100%; float: left; background-color: #00677C;">
            <h1>Saikat Vai</h1>
        </div>
        <div id="div2" style="height: 400px; width: 100%; float: left; background-color: #0083C9;">
            <h1>Jakir Vai</h1>
        </div>
        <div id="div3" style="height: 400px; width: 100%; float: left; background-color: #0099FF;">
            <h1>Hasib</h1>
        </div>
    </body>
</html>