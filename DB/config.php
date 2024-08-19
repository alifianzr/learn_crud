<?php
/**
 * using mysqli_connect for database connection
 */
 
 $databaseHost = 'localhost';
 $databaseName = 'learn_crud';
 $databaseUsername = 'root';
 $databasePassword = '';
  
 $connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
  
//  if ($connection){
//     echo "Koneksi Berhasil";
//  }else{
//     echo "Koneksi Gagal". mysqli_connect_error();
//  }
?>