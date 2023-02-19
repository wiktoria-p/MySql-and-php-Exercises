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

        // tworzenie tabel
        // $new_table_car = "CREATE TABLE auta(
        //     id int unsigned auto_increment primary key,
        //     marka varchar(20) not null,
        //     model varchar(20) not null,
        //     kolor varchar(20) not null,
        //     rocznik year not null
        //     )";

        // if (mysqli_query($mysqlConnection, $new_table_car))
        //     echo "tworzenie tabeli udało się";
        // else{
        //     echo "tworzenie tabeli nie udało się";
        //     mysqli_connect_error($mysqlConnection);
        //     }
            
        $insert_value = "INSERT INTO auta (marka, model, rocznik)
        VALUES ('audi', 'a6', 2007)" ;
            if(mysqli_query($mysqlConnection, $insert_value))
            echo "wpis dodany";
        else{
            echo "error" . $insert_value . "<br>" . 
            mysqli_error($mysqlConnection);
        } 
        $insert_value = "INSERT INTO auta (marka, model, rocznik)
        values ('skoda', 'octawia', 2005)";
            if(mysqli_query($mysqlConnection, $insert_value))
            echo "wpis dodany";
        else{
            echo "error" . $insert_value . "<br>" . 
            mysqli_error($mysqlConnection);
        } 
        $insert_value = "INSERT INTO auta (marka, model, rocznik)
        values ('chevrolet', 'aveo', 2004)";
            if(mysqli_query($mysqlConnection, $insert_value))
            echo "wpis dodany";
        else{
            echo "error" . $insert_value . "<br>" . 
            mysqli_error($mysqlConnection);
        } 
        $insert_value = "INSERT INTO auta (marka, model, rocznik)
        values ('toyota', 'carina', 1978)";
            if(mysqli_query($mysqlConnection, $insert_value))
            echo "wpis dodany";
        else{
            echo "error" . $insert_value . "<br>" . 
            mysqli_error($mysqlConnection);
        } 
        $insert_value = "INSERT INTO auta (marka, model, rocznik)
        values ('chrysler', 'voyager', 2001)";
        if(mysqli_query($mysqlConnection, $insert_value))
            echo "wpis dodany";
        else{
            echo "error" . $insert_value . "<br>" . 
            mysqli_error($mysqlConnection);
        }    

        $update_value = "UPDATE auta set marka = 'nowa marka' where id = 2";

        if (mysqli_query($mysqlConnection, $update_value))
        echo "update wykonany";
        else {
            echo "error" . mysqli_error($mysqlConnection);
        }
        
        // aktualizacja danych w tabeli eksperymentsecurity

        $model = "<script>alert(\'trolololo XD\')</script>";
        $model = filter_var($model, FILTER_SANITIZE_SPECIAL_CHARS);

        $add_value = "INSERT INTO auta (model) values ('$model')";

        if (mysqli_query($mysqlConnection, $add_value))
        echo "wpis dodany";
        else {
            echo "error" . $insert_value . "<br>" . mysqli_error($mysqlConnection);
        }

        $select_data = "SELECT * FROM auta where id = 1";
        $read_data = mysqli_query($mysqlConnection, $select_data);
        $one_value = mysqli_fetch_assoc($read_data);
        echo $one_value['marka'];

        if (mysqli_num_rows($read_data) > 0) {
            while($rekord = mysqli_fetch_assoc($read_data)) {
                echo "i:" . $rekord["id"] . "|model:" . $rekord["model"];
            }
        } else{
            echo "brak wyniku";
        }
        
        $delete_value = "DELETE FROM auta where id = 67";
        if (mysqli_query($mysqlConnection, $delete_value))
        echo "wpis usuniety";
        else {
            echo "error" . mysqli_error($mysqlConnection);
        }

    
        // usuwanie tabel
        // $delete = "drop table stazysci";
        // mysqli_query($mysqlConnection, $delete);
    
        // zakończenie połączenia
        mysqli_close($mysqlConnection);
    
    ?>
</body>
</html>