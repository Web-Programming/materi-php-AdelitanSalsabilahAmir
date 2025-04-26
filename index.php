<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP</title>
</head>
<body>
    <?php echo "<h1>Welcome to my first website with PHP</h1>";?>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis soluta pariatur omnis velit harum accusantium quo. Beatae omnis dolor, amet repellat nostrum impedit accusamus, doloribus quidem molestiae laboriosam, ea illo.
    <p>My Name is <?php echo "<b> Angel</b>";?></p>
    <hr/>
    <h4>Menulis Variabel di PHP</h4>
    <?php
        //Variabel Dinamis
        $nama = "Angel"; //String
        $umur = 10;//Number
        $perempuan = true; //boolean
        $saldo = null; //null
        $hobby = ["Mencabut", "Makan", "joging"];// array
        $makanan_fav = array("Sosis", "Kayu");//array

        //Variabel Statis 
        const PI = 3.14;
        echo "Nilai PI = ",PI;
        echo "<br/>";
        echo "Umur = $umur";
        echo "<br/>";
        echo "Nama = $nama";
        echo "<br/>";
        //echo "hobby = $hobby[0]";
        //echo "<br/>";
        //echo "makanan favorit = $makanan_fav[0]";
        //Menampilkan nilai array
        foreach ($hobby as $key => $value){
            echo "hobby ".($key+1)." = $value <br/>";       

        }
        $saldo = 50; //dollar
        //tampilkan symbol dollar ($) menggunakan echo
        echo "saldo anda = \"$$saldo USD\"";
    ?>    
</body>
</html>