<?php
if (isset($_POST['simpan'])) {
    if (empty($_POST["nim"])) {
        echo "Isi Form";
    } else {
        $nim = $_POST["nim"];
        echo $nim;
    }
} else {
    echo "Harap Isi NIM Terlebih Dahulu";
}
