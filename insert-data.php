<?php
    include "koneksi.php";

    $sql = "INSERT INTO user 
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE
    (
        '1',
        'Maulana Ahmad',
        'Frontend Developer',
        'Full Time',
        '22',
        'Jakarta, Indonesia',
        '2',
        'lyfewithcode@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>