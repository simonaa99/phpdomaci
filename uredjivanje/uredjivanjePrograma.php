<?php
include 'models/Program.php';

if (isset($_POST['program_grupa'])) {

    $program = new Program();
    $program->setProgram_grupa($_POST['program_grupa']);
    $program->setProgram_cena($_POST['program_cena']);
    $program->setProgram_opis($_POST['program_opis']);
    $program->setTeretana_id($_POST['teretana_id']);


    $program->save();
}
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Technopolis</title>
    <meta charset="UTF-8">

    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>


    <script src="//cdn.ckeditor.com/4.5.5/basic/ckeditor.js"></script>

    <script>
        $.get("kontroler.php", {
                program: "prikaz"
            })
            .done(function(data) {
                var ispis = '';
                var podaci = JSON.parse(data);
                ispis = '';
                for (var i = 0; i < podaci.length; i++) {
                    ispis += '<div class="blog_grid">' +
                        '<p>' + podaci[i].program_grupa + ' - ' + podaci[i].program_opis + '</p>' +
                        '<ul class="links">' +
                        '<li><button type="button" onclick="obrisi(' + podaci[i].program_id + ')" >Obrisi</button></li>' +
                        '</ul>' +
                        '</div>';
                };
                $('#firme').html(ispis);
            });

        //ispis delatnost
        $.get("kontroler.php", {
                teretana: "prikaz"
            })
            .done(function(data) {
                var ispis = '';
                var podaci = JSON.parse(data);
                for (var i = 0; i < podaci.length; i++) {
                    ispis += '<option  value=' + podaci[i].teretana_id + '>' + podaci[i].teretana_naziv + '</option>';
                };
                $('#delatnost').html(ispis);
            });


        function obrisi(id) {
            $.get('kontroler.php', {
                    obrisi: 'program',
                    id: id
                })
                .done(function(data) {
                    if (data == 'OK') {
                        location.reload();
                    } else {
                        alert('Greska');
                    }
                });
        }
    </script>

    <div class="about">
        <div class="container">
            <section class="title-section">
                <h1 class="text-center" class="title-header"> Informacije o programima </h1>
                <a href="index.php">
                    < Povratak na pocetnu</a>
            </section>
        </div>
    </div>

    <div class="container">
        <div id="content_left">
            <h1 class="text-center">Unos programa</h1>

            <div class="box">

                <p>
                <form class="form-group" action="" method="POST" name="unos">
                    <p>Naziv grupa</p>
                    <input class="form-control" type="text" name="program_grupa">
                    <p>Teretana u kojoj se odrzava trening</p>
                    <select class="form-control" id="delatnost" name="teretana_id">
                    </select>
                    <p>Opis</p>
                    <textarea name="program_opis"></textarea>
                    <script>
                        CKEDITOR.replace('program_opis');
                    </script>
                    <p>Cena</p>
                    <input type="text" class="form-control" name="program_cena">
                    <p></p><br><br>
                    <button type="submit" class="form-control" class="btn btn-danger">Zapamti</button>

                </form>
                </p>
            </div>

            <div class="row">
                <div class="col-md-6" id="firme">
                </div>
            </div>
        </div>
    </div>