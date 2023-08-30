<?php
    require('../Config/Database.php');

    Class MSiswa{

        var $sql;

        function Simpan($nis,$nama){
            global $koneksi; // Access the global $koneksi variable
            $sql="insert into siswa values('".$nis."','".$nama."')";
            $res = mysqli_query($koneksi,$sql);
            // return
            if($res == 1) {
                // return "Data [".$nis." - ".$nama. "] Berhasil Disimpan";
                return "Berhasil";
            }

        }
        
    }
?>