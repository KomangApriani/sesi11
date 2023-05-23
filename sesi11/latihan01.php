<?php 
    $dta[0]["nama"] = "Komang Apriani";
    $dta[0]["alamat"] = "Jl. Tukad Pancoran";
    $dta[0]["email"] = "aprianikomang16@gmail.com";
    $dta[0]["tgl_lahir"] = "2001-04-10";
    $dta[0]["jurusan"] = "MTI";
  
    $dta[1]["nama"] = "Ketut Aditya";
    $dta[1]["alamat"] = "Jl. Sakura";
    $dta[1]["email"] = "aditya16@gmail.com";
    $dta[1]["tgl_lahir"] = "2003-07-05";
    $dta[1]["jurusan"] = "IPS";
  
    $dta[2]["nama"] = "Putu Deta";
    $dta[2]["alamat"] = "Jl. Jalanin Aja Dulu";
    $dta[2]["email"] = "detapratiwi16@gmail.com";
    $dta[2]["tgl_lahir"] = "2004-10-02";
    $dta[2]["jurusan"] = "Bahasa";

    header("Comtent-Type: application/json; charset=utf-8");
    echo json_encode($dta);

