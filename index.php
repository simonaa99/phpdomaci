<!DOCTYPE HTML>
<html>

<head>
    <title>Teretana</title>
    <meta charset="UTF-8">

    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- <link href="css/moj.css" rel='stylesheet' type='text/css' /> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        // Ajax prikaz programa prilikom pokretanja stranice
        $.get("kontroler.php", {
                program: "prikaz"
            })
            .done(function(data) {
                var ispis = '';
                var podaci = JSON.parse(data);
                for (var i = 0; i < podaci.length; i++) {
                    ispis += '<div class="blog_grid">' +
                        '<h2 class="post_title">' + podaci[i].program_grupa + '</h2>' +
                        '<ul class="links">' +
                        '<li><i class="fa fa-calendar"></i>' + podaci[i].teretana_id + '</li><br>' +
                        '<li><i class="fa fa-globe"></i> ' + podaci[i].program_opis + '</li><br>' +
                        '<li><i class="fa fa-money"></i>' + podaci[i].program_cena + '</li>' +
                        '</ul>' +
                        '</div>';
                };
                $('#program').html(ispis);
            });


        //Ajax prikaz svih teretana
        $.get("kontroler.php", {
                teretana: "prikaz"
            })
            .done(function(data) {
                var ispis = '';
                var podaci = JSON.parse(data);
                for (var i = 0; i < podaci.length; i++) {
                    ispis += '<li value=' + podaci[i].teretana_id + '>*' + podaci[i].teretana_naziv + '</li>';

                }
                ispis += '<a style="color:red" href="uredjivanjeTeretane.php">+ Dodaj novu teretanu</a>';
                $('#teretana').html(ispis);
            });


        //Sortiranje
        function sortAsc() {
            $.get("kontroler.php", {
                    program: "sortAsc"
                })
                .done(function(data) {
                    var ispis = '';
                    var podaci = JSON.parse(data);
                    for (var i = 0; i < podaci.length; i++) {
                        ispis += '<div class="blog_grid">' +
                            '<h2 class="post_title">' + podaci[i].program_grupa + '</h2>' +
                            '<ul class="links">' +
                            '<li><i class="fa fa-calendar"></i>' + podaci[i].teretana_id + '</li>' +
                            '<li><i class="fa fa-globe"></i> ' + podaci[i].program_opis + '</li>' +
                            '<li><i class="fa fa-money"></i>' + podaci[i].program_cena + '</li>' +
                            '</ul>' +
                            '</div>';
                    };
                    $('#program').html(ispis);
                });
        }

        function sortDesc() {
            $.get("kontroler.php", {
                    program: "sortDesc"
                })
                .done(function(data) {
                    var ispis = '';
                    var podaci = JSON.parse(data);
                    for (var i = 0; i < podaci.length; i++) {
                        ispis += '<div class="blog_grid">' +
                            '<h2 class="post_title">' + podaci[i].program_grupa + '</h2>' +
                            '<ul class="links">' +
                            '<li><i class="fa fa-calendar"></i>' + podaci[i].teretana_id + '</li>' +
                            '<li><i class="fa fa-globe"></i> ' + podaci[i].program_opis + '</li>' +
                            '<li><i class="fa fa-money"></i>' + podaci[i].program_cena + '</li>' +
                            '</ul>' +
                            '</div>';
                    };
                    $('#program').html(ispis);
                });
        }



        // Ajax pretraga
        function search() {
            $.get("kontroler.php", {
                    program: 'pretraga',
                    tekst: $('#pretraga').val()
                })
                .done(function(data) {
                    var ispis = '';
                    var podaci = JSON.parse(data);
                    for (var i = 0; i < podaci.length; i++) {
                        ispis += '<div class="blog_grid">' +
                            '<h2 class="post_title">' + podaci[i].program_grupa + '</h2>' +
                            '<ul class="links">' +
                            '<li><i class="fa fa-calendar"></i>' + podaci[i].program_cena + '</li>' +
                            '<li><i class="fa fa-globe"></i> ' + podaci[i].program_opis + '</li>' +
                            '<li><i class="fa fa-money"></i>' + podaci[i].teretana_id + '</li>' +
                            '</ul>' +
                            '</div>';
                    };
                    $('#program').html(ispis);
                });
        }
    </script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="logo"> <a href="index.php"><img src="images/logot.png" alt="Technopolis"></a> </div>
            <div class="menu"> <a class="toggleMenu" href="#"><img src="images/logot.png" alt="" /> </a>
                <ul class="nav" id="nav">
                    <li><a href="index.php">Početna</a></li>
                    <li><a href="uredjivanjePrograma.php">Uredjivanje programa</a></li>
                </ul>
            </div>

        </div>

    </div>


    <div class="about">
        <div class="container">
            <section class="title-section">
                <h1 class="title-header text-center"> Programi za vežbanje </h1>
            </section>
            <button class="btn" onclick="sortDesc()">Sortiraj opadajuce</button>
            <button class="btn" onclick="sortAsc()">Sortiraj rastuce</button>
        </div>
    </div><br>



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <input id="pretraga" type="search" onsearch="search()" class="form-control" placeholder="Pretraga..." onkeyup="search()" size="45">
                <div id="program">
                </div>
            </div>

            <div class="col-md-6">
                <h3>Spisak svih aktivnih teretana u gradu:</h3>

                <ul class="sidebar" id="teretana">
                </ul>
            </div>
        </div>
    </div>