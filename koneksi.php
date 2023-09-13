<?php
$koneksi=mysqli_connect("localhost","root","","logindb");
//Cek koneksi
if(mysqli_connect_error()){
    echo "Koneksi database gagal:", mysqli-connect-error();
}else{
    echo " berhasil ";

}
?>