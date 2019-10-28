<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    <body>
        <?php
        $mycountry = $_GET['myCountry'];
        echo $mycountry;
        ?>
        <div id="footer">
                <div onclick="window.open('https://github.com/raresmihalache/autocomplete-search')" id="footer-git-icon">
                    <i class="fab fa-github"></i>
                </div>
            </div>
    </body>
</html>