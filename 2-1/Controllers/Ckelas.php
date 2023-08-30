<?php 

require('../Models/Mkelas.php');
Class CKelas {
    
        function SimpanData($nama){
        
            $db = new MKelas();
            echo $db->Simpan($nama);
            
        }

        function UpdateData($nama, $newNama) {
            $db = new MKelas();
            echo $db->Update($nama, $newNama);

        }

        function DeleteData($nama) {
            $db = new MKelas();
            echo $db->Delete($nama);
        }

    }

?>