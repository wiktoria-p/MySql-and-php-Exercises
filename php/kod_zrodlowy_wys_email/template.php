<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Wysyłanie e-maili</title>

    </head>
    <body>
        <?php
            $do    = "adres@email.com";
            $temat = "temat";
            $tresc = "<b>Testowy</b> e-mail do $do o treśći\n<br />".
                     "Tekst w następnej lini\n".
                     "Jeszcze jedna linia";
            $tresc = wordwrap($tresc, 70);
            $tresc = str_replace("\n.", "\n..", $tresc);
            
            $naglowki = "Content-type: text/html; charset=UTF8\r\n".
                        "From: "."twojmail@email.com"."\r\n".
                        "Reply-to: "."twojmail@email.com"."\r\n";
            
            mail($do, $temat, $tresc, $naglowki);
            
            //text/html
                   
        ?>
    </body>
</html>