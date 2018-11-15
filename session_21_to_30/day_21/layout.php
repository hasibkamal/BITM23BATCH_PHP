<html>
    <head>
        <title>
            Javscript Layout
        </title>
        <script type="text/javascript">
            function layout(){
                var layout = document.getElementById('layout');
                var header_area = document.getElementById('header_area');
                var header_icon = document.getElementById('header_icon');
                var header_content = document.getElementById('header_content');
                var body_area = document.getElementById('body_area');
                var body_left_sidebar = document.getElementById('body_left_sidebar');
                var body_content = document.getElementById('body_content');
                var body_right_sidebar = document.getElementById('body_right_sidebar');
                var footer_area = document.getElementById('footer_area');
                var logo = document.getElementById('logo');
                
                layout.style.margin = 'auto';
                layout.style.height = '800px';
                layout.style.width = '1000px';
                
                
                header_area.style.width = '100%';
                header_area.style.float = 'left';
                
                header_icon.style.width = '25%';
                header_icon.style.height = '150px';
                header_icon.style.float = 'left';
                header_icon.style.backgroundColor = 'gray';
                header_icon.style.fontSize = '25px';
                header_icon.style.textAlign = 'center';
                
                logo.src = 'img/logo_img.png';
                
                header_content.style.float = 'right';
                header_content.style.width = '75%';
                header_content.style.height = '150px';
                header_content.style.backgroundColor = '#8B9CAF';
                header_content.style.fontSize = '50px';
                header_content.style.textAlign = 'center';
                header_content.innerHTML = 'Header Content';
                
                
                
                
                body_area.style.float = 'left';
                body_area.style.width = '100%';
                
                body_left_sidebar.style.width = '25%';
                body_left_sidebar.style.float = 'left';
                body_left_sidebar.style.height = '600px';
                body_left_sidebar.style.fontSize = '60px';
                body_left_sidebar.style.textAlign = 'center';
                body_left_sidebar.innerHTML = 'Left Sidebar';
                body_left_sidebar.style.backgroundColor = '#954332';
                
                body_content.style.width = '50%';
                body_content.style.float = 'left';
                body_content.style.height = '600px';
                body_content.style.backgroundColor = 'gray';
                
                
                body_right_sidebar.style.width = '25%';
                body_right_sidebar.style.float = 'left';
                body_right_sidebar.style.height = '600px';
                body_right_sidebar.style.textAlign = 'center';
                body_right_sidebar.style.fontSize = '60px';
                body_right_sidebar.innerHTML = 'Right Sidebar';
                body_right_sidebar.style.backgroundColor = '#954332';
                
                
                footer_area.style.backgroundColor = '#BBA8A4';
                footer_area.style.width = '100%';
                footer_area.style.float = 'left';
                footer_area.style.height = '70px';
                
                
                
                
                
                
                
                
                
                
                
            }
        </script>
    </head>
    <body onload="layout()"> 
        <div id="layout">
            <div id="header_area">
                <div id="header_icon">
                    <img id="logo" alt="" height="150px" width="150px">
                </div>
                <div id="header_content">
                    
                </div>
            </div>
            
            <div id="body_area">
                <div id="body_left_sidebar">
                    
                </div>
                <div id="body_content">
                    
                </div>
                
                <div id="body_right_sidebar">
                    
                </div>
            </div>
            
            <div id="footer_area">
                
            </div>
        </div>
    </body>
    </head>
</html>