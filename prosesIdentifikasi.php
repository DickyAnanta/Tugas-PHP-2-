<?php

if (!empty($_POST)) {
    $nim = $_POST["nim"];
} else {
    echo "";
}

function lenghtNIM($nim)
{
    $lenghtNim = strlen($nim);
    echo "Jumlah Karakter NIM anda adalah ", $lenghtNim;
}

function tahunAngkatan($nim)
{
    $kode_angkatan = [
        "19" => "2019",
        "21" => "2021",
        "22" => "2022",
        "23" => "2023",
        "24" => "2024",
    ];

    $cari = substr($nim, 0, 2);

    if (strpos($nim, $cari) == 0) {
        if ($cari == "19") {
            $tahunAngkatan = $kode_angkatan[$cari];
        } elseif ($cari == "20") {
            $tahunAngkatan = $kode_angkatan[$cari];
        } elseif ($cari == "21") {
            $tahunAngkatan = $kode_angkatan[$cari];
        } elseif ($cari == "22") {
            $tahunAngkatan = $kode_angkatan[$cari];
        } elseif ($cari == "23") {
            $tahunAngkatan = $kode_angkatan[$cari];
        } else {
            $error = "Maaf Anda Informasi Tidak Valid";
        }
    } else {
        return;
    }


    if (!empty($tahunAngkatan)) {
        return $tahunAngkatan;
    } else {
        return $error;
    }
}

function kodeFakultas($nim)
{
    $kode_fakultas = [
        "01" => "FTII",
        "02" => "FHB",
        "03" => "FEB",
        "04" => "VOKASI",
    ];

    $cari = substr($nim, 3, 2);

    if (strpos($nim, $cari)) {
        if ($cari == "01") {
            $fakultas = $kode_fakultas[$cari];
        } elseif ($cari == "02") {
            $fakultas = $kode_fakultas[$cari];
        } elseif ($cari == "03") {
            $fakultas = $kode_fakultas[$cari];
        } elseif ($cari == "04") {
            $fakultas = $kode_fakultas[$cari];
        } else {
            $error = "Maaf Anda Informasi Tidak Valid";
        }
    } else {
        return;
    }

    if (!empty($fakultas)) {
        return $fakultas;
    } else {
        return $error;
    }
}


function kodeProdi($nim, $kode_fakultas)
{
    if ($kode_fakultas == "FTII") {
        if (strpos($nim, "53")) {
            $prodi = "Teknik Informatika";
        } elseif (strpos($nim, "55")) {
            $prodi = "Sistem Informasi";
        } elseif (strpos($nim, "51")) {
            $prodi = "Teknik Industri";
        } elseif (strpos($nim, "58")) {
            $prodi = "Magister Teknologi Informasi";
        } else {
            $error = "Maaf Anda Informasi Tidak Valid";
        }
    } elseif ($kode_fakultas == "FHB") {
        if (strpos($nim, "51")) {
            $prodi = "Ilmu Hukum";
        } elseif (strpos($nim, "52")) {
            $prodi = "Sastra Inggris";
        } else {
            $error = "Maaf Anda Informasi Tidak Valid";
        }
    } elseif ($kode_fakultas == "FEB") {
        if (strpos($nim, "51")) {
            $prodi = "Manajemen";
        } elseif (strpos($nim, "52")) {
            $prodi = "Akuntansi";
        } else {
            $error = "Maaf Anda Informasi Tidak Valid";
        }
    } elseif ($kode_fakultas == "VOKASI") {
        if (strpos($nim, "31")) {
            $prodi = "Manajemen Informatika";
        } elseif (strpos($nim, "34")) {
            $prodi = "Keuangan Perbankan";
        } elseif (strpos($nim, "32")) {
            $prodi = "Perhotelan";
        } else {
            $error = "Maaf Anda Informasi Tidak Valid";
        }
    } else {
        $error = "Maaf Anda Informasi Tidak Valid";
    }

    if (!empty($prodi)) {
        return $prodi;
    } else {
        return $error;
    }
}

if (empty($nim)) {
    echo "";
} else {
    lenghtNIM($nim);
    echo "<br>";
    $angkatan = tahunAngkatan($nim);
    if ($angkatan != "Maaf Anda Informasi Tidak Valid") {
        echo "Anda Merupakan Mahasiswa Angkatan ", $angkatan;
    } else {
        echo $angkatan;
    }
    echo "<br>";
    $fakultas = kodeFakultas($nim);
    if ($fakultas != "Maaf Anda Informasi Tidak Valid") {
        echo "Anda Merupakan Mahasiswa Fakultas ", $fakultas;
    } else {
        echo $fakultas;
    }
    echo "<br>";
    $prodi = kodeProdi($nim, $fakultas);
    if ($prodi != "Maaf Anda Informasi Tidak Valid") {
        echo "Anda Merupakan Mahasiswa Dari Prodi ", $prodi;
    } else {
        echo $prodi;
    }
}
