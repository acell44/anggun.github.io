<html>
    <head>
        <title>Menghitung Luas lingkaran</title>
    </head>
    <body>
        <?php
        //konstanta untuk nilai Judul
        define("Judul", "Hitung Luas Lingkaran");
        //konstanta untuk nilai phi
        define("PHI", 3.14);
        echo Judul;
        $r=10;
        echo"<br>Jari-jari : $r<br>\n";
        $luas=PHI * $r * $r;
        echo "Luas Lingkaran = $luas";      
        ?>  
    </body>
</html>