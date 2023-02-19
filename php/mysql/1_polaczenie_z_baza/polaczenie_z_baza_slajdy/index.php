<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "kurs";

    // połączenie z serwerem
    $mysqlConnection = mysqli_connect($servername, $username, $password);

    if ($mysqlConnection) {
        echo "połączono z serwerem bazt danych. <br />";
    } else {
        die(mysqli_connect_error());
    }

    // połączenie z bazą danych
    mysqli_select_db($mysqlConnection, $database_name) or die(mysqli_connect_error());
    echo "połączono z bazą danych <b>$database_name</b> <br />";

    // usuwanie tabel
    $delete = "drop table stazysci";
    mysqli_query($mysqlConnection, $delete);

    // zakończenie połączenia
    mysqli_close($mysqlConnection);


    

    ?>
    
</body>
</html>