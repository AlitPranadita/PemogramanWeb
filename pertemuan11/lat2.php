<?php
    $data[0]["NIM"] = "2201010559";
    $data[0]["NAMA"] = "I Komang Alit Pranadita";
    $data[0]["JENIS_KELAMIN"] = "L";
    $data[0]["PRODI"] = "Teknik Informatika - Manajemen Data dan Informasi";
    $data[0]["TGL_LAHIR"] = "2004-06-10";
    $data[0]["LULUSAN"] = "SMA Negeri 1 Abiansemal";

    $data[1]["NIM"] = "2201010560";
    $data[1]["NAMA"] = "I Wayan Susanti";
    $data[1]["JENIS_KELAMIN"] = "P";
    $data[1]["PRODI"] = "Teknik Informatika - Manajemen Data dan Informasi";
    $data[1]["TGL_LAHIR"] = "2004-07-10";
    $data[1]["LULUSAN"] = "SMA Negeri 1 Abiansemal";

    $data[2]["NIM"] = "2201010561";
    $data[2]["NAMA"] = "I Made Koleh";
    $data[2]["JENIS_KELAMIN"] = "L";
    $data[2]["PRODI"] = "Teknik Informatika - Manajemen Data dan Informasi";
    $data[2]["TGL_LAHIR"] = "2003-11-21";
    $data[2]["LULUSAN"] = "SMA Negeri 1 Abiansemal";

    $data[3]["NIM"] = "2201010562";
    $data[3]["NAMA"] = "I Ketut Jarjit";
    $data[3]["JENIS_KELAMIN"] = "P";
    $data[3]["PRODI"] = "Teknik Informatika - Manajemen Data dan Informasi";
    $data[3]["TGL_LAHIR"] = "2003-05-13";
    $data[3]["LULUSAN"] = "SMA Negeri 1 Abiansemal";

    $data[4]["NIM"] = "2201010563";
    $data[4]["NAMA"] = "I Wayan Jigrig";
    $data[4]["JENIS_KELAMIN"] = "L";
    $data[4]["PRODI"] = "Teknik Informatika - Manajemen Data dan Informasi";
    $data[4]["TGL_LAHIR"] = "2004-03-13";
    $data[4]["LULUSAN"] = "SMA Negeri 1 Abiansemal";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($data);