 <?php
    $connect = mysqli_connect('localhost', 'root', '', 'baza');
    $zapytanie = "SELECT id, nazwa, cena FROM `dania` WHERE typ = 4;";
    $query = mysqli_query($connect, $zapytanie);
                    
        while($wiersz = mysqli_fetch_array($query)){
        echo "<p>" . $wiersz[0] . " " . $wiersz[1] . " " . $wiersz[2] . "</p>";
        }
    mysqli_close($connect);
 ?> 