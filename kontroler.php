<?php
include 'models/Teretana.php';
include 'models/Program.php';

if (isset($_GET['teretana']) && $_GET['teretana'] == 'prikaz') {
    echo json_encode(Teretana::vratiSvePodatkeIzBaze());
}

if (isset($_GET['program']) && $_GET['program'] == 'prikaz') {
    echo json_encode(Program::vratiSvePodatkeIzBaze());
}

if (isset($_GET['program']) && $_GET['program'] == 'pretraga') {
    if (isset($_GET['tekst'])) {
        echo json_encode(Program::vratiPoNazivu($_GET['tekst']));
    }
}

if (isset($_GET['program']) && $_GET['program'] == 'sortAsc') {
    echo json_encode(Program::sortAsc());
}

if (isset($_GET['program']) && $_GET['program'] == 'sortDesc') {
    echo json_encode(Program::sortDesc());
}


if (isset($_GET['obrisi']) && $_GET['obrisi'] == 'program') {
    if (Program::obrisi($_GET['id'])){
        echo 'OK';
    }
    else{
        echo 'ERR';
    }
}


if (isset($_GET['obrisi']) && $_GET['obrisi'] == 'teretana') {
    if (Teretana::obrisi($_GET['id'])){
        echo 'OK';
    }
    else{
        echo 'ERR';
    }
}
