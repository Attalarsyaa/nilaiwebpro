<?php
if (isset ($_POST['update'])) {
    include_once('config.php');
    $nis = $_POST ['nis'];
    $nama = $_POST ['name'];
    $gender = $_POST ['gender'];
    $pob = $_POST ['pob'];
    $dob = $_POST ['dob'];
    $address = $_POST ['address'];
    $phone = $_POST ['phone'];
    $email = $_POST ['email'];
    $grade_id = $_POST ['grade_id'];

    $sql = "UPDATE students SET nis='$nis', name='$name', gender='$gender', pob='$pob', dob='$dob', address='$address', phone='$phone', email='$email', grade_id='$grade_id' WHERE id='id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ?m=siswa&s=view");
    }   else {
            echo "<script>alert('Data gagal disimpan'); window,location='?m=siswa&s=edit';</script>";
    }
}   else {
        echo "Jangan langsung buka file ini. Tambah data <a href='?m=siswa&s=edit'>Klik Disini</a>";
}