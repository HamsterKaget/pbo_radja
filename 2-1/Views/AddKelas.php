<?php 
    require('../Controllers/Ckelas.php');
    $Kelas = new Ckelas();
?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Masukan Nama Kelas</td><td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="simpan" value="Simpan">
                </td>
            </tr>
        </table>
    </form>

    <?php 
        if(isset($_POST['simpan'])){
            $Kelas->SimpanData($_POST['name']);
        }
    ?>

