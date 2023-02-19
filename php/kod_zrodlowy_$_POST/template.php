<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Zmienna Predefiniowana $_POST</title>

    </head>
    <body>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    Login: <input type="text" name="login" maxlength="8" size="5" />
                </div>
                <div>
                    Password: <input type="password" name="haslo" maxlength="15" size="5" />
                </div> 
                <div>
                    <input type="submit" value="Zaloguj się" />
                </div>
            </div>
        </form>
        <?php
            // Tutaj umieścisz swój kod PHP
        ?>
        
    </body>
</html>
