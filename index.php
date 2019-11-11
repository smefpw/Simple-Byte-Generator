<html>
    <head>
        <title>smef's</title>

        <style>
            body 
            {
                background-color: #303030;
                
                color: #FF0000;
                font-size: 15px;
                font-weight: normal;
                font-style: normal;
                font-family: "Verdana";
            }
        </style>
    </head>

    <body>
        <?php
            $max = 100;
            $code = openssl_random_pseudo_bytes;

            for ($i = 1; $i < $max; $i++) 
            { 
                $byte = bin2hex($code(1));
                print "__asm _emit 0x" . $byte . " \\<br>"; 
            }
        ?>
    </body>
</html>
