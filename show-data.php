<?php
    include "koneksi.php";
    
    $sql = "SELECT * FROM user";
    $result = $koneksi->query($sql);

    foreach($result as $result){ //$result, $res, $hasil, $(apapun)
        $id = $result["id"];
        $nama = $result["nama"];
        $role = $result["role"];
        $availability = $result["availability"];
        $age = $result["age"];
        $location = $result["location"];
        $experience = $result["years_experience"];
        $email = $result["email"];
    }
?>