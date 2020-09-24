<!DOCTYPE html>
<html>
    <head lang="pl">
        <meta charset="utf-8">
        <title>Restauracja Kulinaria.pl</title>
        <link rel="stylesheet" type="text/css" href="styl4.css">
    </head>
    <body>
        <section id="baner">
            <h2>Restauracja Kulinaria.pl Zaprasza!</h2>
        </section>
        <section id="pl">
            <p>Dania mięsne zamówisz już od 
                <?php
                    $connect = mysqli_connect('localhost', 'root', '', 'baza');
                    $zapytanie = "SELECT MIN(cena) FROM dania WHERE typ=2";
                    $query = mysqli_query($connect, $zapytanie);
                    
                        while($wiersz = mysqli_fetch_row($query)){
                            echo $wiersz[0];
                        }
                    mysqli_close($connect);
                ?>                
            złotych.</p>
            <img alt="Pyszne spaghetti" src="menu.jpg"><br>
            <a href="menu.jpg">Pobierz obraz</a>
        </section>
        <section id="ps">
            <h3>Przekąski</h3>
            <?php
                $connect = mysqli_connect('localhost', 'root', '', 'baza');
                $zapytanie = "SELECT id, nazwa, cena FROM `dania` WHERE typ = 3;";
                $query = mysqli_query($connect, $zapytanie);
                    
                    while($wiersz = mysqli_fetch_row($query)){
                        echo "<p>" . $wiersz[0] . " " . $wiersz[1] . " " . $wiersz[2] . "</p>";
                    }
                mysqli_close($connect);
            ?>
        </section>
        <section id="pp">
            <h3>Napoje</h3>
            <?php
                $connect = mysqli_connect('localhost', 'root', '', 'baza');
                $zapytanie = "SELECT id, nazwa, cena FROM `dania` WHERE typ = 4;";
                $query = mysqli_query($connect, $zapytanie);
                    
                    while($wiersz = mysqli_fetch_row($query)){
                    echo "<p>" . $wiersz[0] . " " . $wiersz[1] . " " . $wiersz[2] . "</p>";
                    }
                mysqli_close($connect);
            ?>
        </section>
        <section id="stopka">
            <span>Stronę internetową opracował:<i> 01234567890</i></span>
        </section>
        
    </body>
</html>













