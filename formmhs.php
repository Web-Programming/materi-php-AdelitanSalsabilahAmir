<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

    
    <form action="formmhs.php" method="POST">

        Mahasiswa :
        <input type="text" name="nama" /><br />
        

        NPM :
        <input type="text" name="npm" /><br />
        

        Email :
        <input type="text" name="email" /><br />
        <input type="submit" value="Add" />

    </form>
    <?php
    if(isset($_POST['nama']['npm']['email'])){
        echo "Nama : <b>". $_POST['nama'] ."</b><br/>";
        echo "NPM : <b>" . $_POST['npm'] . "</b><br/>";
        echo "Email : <b>" . $_POST['email'] . "</b><br/>";


    }
    ?>