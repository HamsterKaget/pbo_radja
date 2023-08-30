<?php 

require('../Models/MSiswa.php');
Class CSiswa {
    
        function SimpanSiswa($nis,$nama){
        
            $db = new MSiswa();
            echo $db->Simpan($nis,$nama);
            // return "Data Berhasil Disimpan";
            // redirect("http://localhost/materi.pbo/2/Views/Siswa.php");
            
        }

    }

?>