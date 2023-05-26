<?php
    $data["NIM"] = "2201010559";
    $data["NAMA"] = "I Komang Alit Pranadita";
    $data["JENIS_KELAMIN"] = "L";
    $data["PRODI"] = "Teknik Informatika - Manajemen Data dan Informasi";
    $data["TGL_LAHIR"] = "2004-06-10";
    $data["LULUSAN"] = "SMA Negeri 1 Abiansemal";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($data);