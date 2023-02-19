<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Operacje na plikach</title>

    </head>
    <body>
        <?php
            /*      FILE
             *     $wskaznik = fopen("plik.txt", "TRYBEM OTWARCIA");
             *          
             *     r - (read) - otwiera plik do odczytu; ustawia wskaźnik (uchwyt pliku) na początek; WYMAGA ABY PLIK BYL JUZ STWORZONY
             *     r+ - robi to co wyżej + pozwala zapisywać
             * 
             *     w - (write) - otwiera plik do zapisu; ustawia wskaźnik na początku pliku. Usuwa dotychczasowa zawartość pliku; jeżeli plik nie istnieje to go tworzy!
             *     w+ - robi to co wyżej + pozwala odczytywać
             * 
             *     a - (attach) - otwiera plik do zapisu; ustawia wskaźnik na koniec pliku; jeśli plik nie istnieje to go tworzy
             *     a+ - robi to co wyżej + pozwala odczytywać
             */
             $nazwaPliku = "test.txt";
             $wskaznik = @fopen($nazwaPliku, "r+");
             
             if ($wskaznik)
             {
                // # 1
                
                
                // # 2
                
                
                // # 3
                
             }
             else
                 echo "Nie ma takiego pliku";
                 
            
            @fclose($wskaznik);
        ?>
    </body>
</html>