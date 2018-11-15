<html>
    <head>
        <title>Country</title>
        <script type="text/javascript" src="country.js"></script>
        <script type="text/javascript">
            //Objective Array {Array is processing in the way of object}
            function selectCountry(){
                var country = {
                    'BD': 'Bangladesh',
                    'CA': 'Canada',
                    'DU': 'German'
                }
                for(key in country){
                    document.write("<option>"+country[key]+"</option>");
                }
            }
            
        </script>
    </head>
    <body>
        <select>
            <option>Select Country</option>
            <script>
                selectCountry();
            </script>
        </select>
        
        <select>
            <option>Select Any Country</option>
            <script>
                printCountryOptions();
            </script>
        </select>
        
        <select>
            <option>Select State</option>
            <script>
                printStateOptions();
            </script>
        </select>
    </body>
</html>