<?php
include 'models/Teretana.php';

if (isset($_POST['teretana_naziv'])) {
    $teretana = new Teretana();
    $teretana->setTeretana_naziv($_POST['teretana_naziv']);
    $teretana->save();
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
                teretana: "prikaz"
            })
            .done(function(data) {
                var ispis = '';
                var podaci = JSON.parse(data);
                ispis = '';
                for (var i = 0; i < podaci.length; i++) {
                    ispis += '<div class="blog_grid">' +
                        '<p>' + podaci[i].teretana_naziv + '</p>' +
                        '<ul class="links">' +
                        '<li><button type="button" onclick="obrisi(' + podaci[i].teretana_id + ')" >Obrisi</button></li>' +
                        '</ul>' +
                        '</div>';
                };
                $('#firme').html(ispis);
            });


        function obrisi(id) {
            $.get('kontroler.php', {
                    obrisi: 'teretana',
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
                    <p>Naziv teretane</p>
                    <input class="form-control" type="text" name="teretana_naziv">
                    <p></p><br><br>
                    <button type="submit" class="form-control" class="btn btn-danger">Zapamti</button>
                </form>





                </p>
            </div>
            <div class="row">
                <div class="col-md-8" id="firme">
                </div>
            </div>
        </div>
    </div>