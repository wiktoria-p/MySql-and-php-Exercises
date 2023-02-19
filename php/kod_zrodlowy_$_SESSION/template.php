<!-- miejsce na kod rozpoczynający sesję  -->

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Zmienna Predefiniowana $_POST</title>

    </head>
    <body>
        <!-- przenieś formularz na koniec (przed zamknięciem body)  -->
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
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br /><br />";
            
            // null
            
            // # 1.O
            
            if (isset($_POST['login']) && isset($_POST['haslo'])) // # 2.1
            {
                if (!empty($_POST['login']) && !empty($_POST['haslo'])) // # 2.2
                {
                    // # 2.3
                    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING); // # 2.3
                    $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING); // # 2.3
                    
                    if ($login == "admin" && $haslo == "abc") // # 2.4
                    
                    {
                        // # 2.5
                        echo "PANEL ADMINISTRACYJNY <br />"; // # 2.5
                        echo "Zalogowałeś się na konto: ".$login; // # 2.5
                    }
                    else
                        echo "Podałeś niepoprawny login lub hasło. Spróbuj ponownie <a href='index.php'>tutaj</a>";
                    
                }   
                else
                    echo "Hej!, nie podałeś loginu lub hasłą. Spróbuj ponownie <a href='index.php'>tutaj</a>";
                 
            }
           // # 3.0
        ?> <!-- # 3.0 -->
        <!-- # 3.0 -->
    </body>
</html>

