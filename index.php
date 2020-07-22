<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>BetterLife</title>
    <link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/Font.css" />
    <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        less = {
            env:'development'
        }
    </script>
    <script src="js/less.min.js"></script>
</head>
<body>
    <style>
        .navbar {
            border-bottom: 4px solid #40ACFA;
        }

        .nav-item.active{
            text-decoration: none;
        }

        .carousel-caption{
            /*background: url('img/carousel/carousel_map.png');*/
            background-repeat: no-repeat;
            background-size: contain;
            top: 0;
            bottom: 0;
            right: 48% !important;
            left: 0 !important;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 40px;
        }

        .carousel-caption .carousel-logo-img {
            width: 150px;
            height: auto;
            padding: 10px;
            background: rgba(0,0,0,0);
        }

        .btn-carousel {
            background: white;
            color: #03528C;
            border: none;
            outline: none;
            border-radius: 50px;
            display: block;
            padding: 10px 40px;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .fondoAzul{
            color: white;
            position: absolute;
            bottom: 0;
            text-align: center;
            /*background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(3,82,140,1) 35%, rgba(4,150,255,1) 100%);*/
            background-image: linear-gradient(90deg, #03528C, #0496FF);
            opacity: 80%;
            width: 100%;
            margin: 0;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            height: 90px;
            align-items: center;
            display: flex;
            text-align: left;
            padding-left: 10px;
        }

        .letrasFondoAzul{
            position: absolute;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: left;
            height: 90px;
            margin: 0;
            padding-left: 10px;
            display: flex;
            align-items: center;
        }
    </style>

    <?php
        if($_GET['eng']){
            $bIngles = 1;
        }else{
            $bIngles = 0;
        }
    ?>

    <header id="header" style="top: 0 !important; z-index: 500; position: fixed;filter: blur(0px);width: 100%;opacity: 0.9;">
        <div style="height: 75px;background: #F9F9F9;width: 100%;box-shadow: 0 0px 10px 1px black;"></div>
        <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light" style="height: 75px;position: absolute;">
            <div style="display: flex;align-items: center;">
                <div>
                    <a class="navbar-brand" href="landingPage" style="margin: 0;"><img class="img-fluid" src="img/logo_bl.png" style="width: 45%"></a>
                </div>
                <div class="btnEsp">
                    <form class="form-inline my-2 my-lg-0" style="display: flex;justify-content: center;right: 0;">
                        <div class="col-12" style="display: flex;width: 100%;">
                            <a id="ENG" class="ENG" style="<?php echo($bIngles == 0 ? 'color: white; background: #0496FF;' : 'color: #0496FF; background: white;')?>">ENG</a>
                            <a id="ESP" class="ESP" style="<?php echo($bIngles == 0 ? 'color: #0496FF; background: white;' : 'color: white; background: #0496FF;')?>">ESP</a>
                        </div>
                    </form>
                </div>
                <div style="position: absolute;right: 0;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav" style="width: 75%">
                    <li class="nav-item active" id="inicio">
                        <a class="nav-link" style="font-family: Avenir-Heavy !important;" href="#Home"><?php echo($bIngles ? 'HOME' : 'INICIO')?><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="procedimientos">
                        <a class="nav-link link-servicios" style="font-family: Avenir-Heavy !important;" href="#Servicios"><?php echo($bIngles ? 'SERVICES' : 'SERVICIOS')?></a>
                    </li>
                    <li class="nav-item" id="medicos">
                        <a class="nav-link link-socios" style="font-family: Avenir-Heavy !important;" href="#Socios"><?php echo($bIngles ? 'PARTNERS' : 'SOCIOS')?></a>
                    </li>
                    <li class="nav-item" id="contacto">
                        <a class="nav-link letrasLandingPage" href="#"><?php echo($bIngles ? 'VISIT PLATFORM' : 'VISITAR PLATAFORMA')?></a>
                    </li>
                </ul>
                <div class="btnIng">
                    <form class="form-inline my-2 my-lg-0" style="display: flex;justify-content: center;">
                        <div class="col-12" style="display: flex;width: 100%;">
                            <a id="engMovil" class="ENG engMovil" style="<?php echo($bIngles == 0 ? 'color: white; background: #0496FF;' : 'color: #0496FF; background: white;')?>">ENG</a>
                            <a id="espMovil" class="ESP espMovil" style="<?php echo($bIngles == 0 ? 'color: #0496FF; background: white;' : 'color: white; background: #0496FF;')?>">ESP</a>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div id="Home" style="background: white">
        <div id="carouselDesktop" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner carusel">
                <div class="carousel-item active">
                    <img src="img/img_1.jpg" class="d-md-block w-100">
                    <div class="carousel-caption">
                        <div class="d-flex align-items-center" style="margin-top: 50px">
                            <img src="img/img_betterlife.svg" class="carousel-logo-img">
                            <div class="d-flex flex-column pl-2">
                                <h3 style="font-size: 22px"><?php echo($bIngles ? 'The Medical' : 'Plataforma integral')?><br><?php echo($bIngles ? 'Tourism Platform' : 'de Turismo Médico')?></h3>
                                <p class="text-white"><?php echo($bIngles ? 'Health & Wellness' : 'Salud y Bienestar')?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button class="btn-carousel"><?php echo($bIngles ? 'Join the Network' : 'Quiero Unirme')?></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/img_2.jpg" class="d-md-block w-100" alt="carousel-landing-02">
                    <div class="carousel-caption">
                        <div class="d-flex align-items-center" style="margin-top: 50px">
                            <img src="img/img_betterlife.svg" class="carousel-logo-img">
                            <div class="d-flex flex-column pl-4">
                                <h3><?php echo($bIngles ? 'Teleassistance' : 'Teleasistencia')?><br><?php echo($bIngles ? 'and Consultations' : 'y consultas')?></h3>
                                <p class="text-white"><?php echo($bIngles ? 'Attending to patients by video call' : 'Atiende a los pacientes por videollamada')?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button class="btn-carousel"><?php echo($bIngles ? 'Join the Network' : 'Quiero Unirme')?></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/img_3.jpg" class="d-md-block w-100" alt="carousel-landing-03">
                    <div class="carousel-caption">
                        <div class="d-flex align-items-center" style="margin-top: 50px">
                            <img src="img/img_betterlife.svg" class="carousel-logo-img">
                            <div class="d-flex flex-column pl-4" style="width: 280px;">
                                <h3><?php echo($bIngles ? 'Wellness & Spa' : 'Bienestar, Wellness y Spa')?><br></h3>
                                <p class="text-white"><?php echo($bIngles ? 'The best attention and services' : 'La mejor atención y servicios')?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button class="btn-carousel"><?php echo($bIngles ? 'Join the Network' : 'Quiero Unirme')?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="carouselMovil" class="carousel slide" data-ride="carousel" style="background-image: linear-gradient(315deg, #03528C, #0496FF);">
            <div class="carousel-inner caruselMovil" style="padding-top: 40px;">
                <div class="carousel-item active">
                    <img src="img/CaruselMovil01.png" class="d-md-block w-100">
                    <div style="height: 100%;position: absolute;width: 100%;opacity: 70%;top: 0;background-image: linear-gradient(315deg, #03528C, #0496FF);"></div>
                    <div class="carousel-caption" style="width: 100%">
                        <div class="d-flex align-items-center">
                            <img src="img/img_betterlife.svg" class="carousel-logo-img">
                            <div class="d-flex flex-column pl-4">
                                <h3 style="font-size: 20px;"><?php echo($bIngles ? 'The Medical' : 'Plataforma integral')?><br><?php echo($bIngles ? 'Tourism Platform' : 'de Turismo Médico')?></h3>
                                <p class="text-white" style="font-size: 12px;"><?php echo($bIngles ? 'Health & Wellness' : 'Salud y Bienestar')?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button class="btn-carousel"><?php echo($bIngles ? 'Join the Network' : 'Quiero Unirme')?></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/CaruselMovil02.png" class="d-md-block w-100" alt="carousel-landing-02">
                    <div style="height: 100%;position: absolute;width: 100%;opacity: 70%;top: 0;background-image: linear-gradient(315deg, #03528C, #0496FF);"></div>
                    <div class="carousel-caption" style="width: 100%">
                        <div class="d-flex align-items-center">
                            <img src="img/img_betterlife.svg" class="carousel-logo-img">
                            <div class="d-flex flex-column pl-4">
                                <h3 style="font-size: 20px;"><?php echo($bIngles ? 'Teleassistance' : 'Teleasistencia')?><br><?php echo($bIngles ? 'and Consultations' : 'y consultas')?></h3>
                                <p class="text-white" style="font-size: 12px;"><?php echo($bIngles ? 'Attending to patients by video call' : 'Atiende a los pacientes por videollamada')?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button class="btn-carousel"><?php echo($bIngles ? 'Join the Network' : 'Quiero Unirme')?></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/CaruselMovil03.png" class="d-md-block w-100" alt="carousel-landing-03">
                    <div style="height: 100%;position: absolute;width: 100%;opacity: 70%;top: 0;background-image: linear-gradient(315deg, #03528C, #0496FF);"></div>
                    <div class="carousel-caption" style="width: 100%">
                        <div class="d-flex align-items-center">
                            <img src="img/img_betterlife.svg" class="carousel-logo-img">
                            <di class="d-flex flex-column pl-4">
                                <h3 style="font-size: 20px;"><?php echo($bIngles ? 'Wellness & Spa' : 'Bienestar, Wellness y Spa')?><br></h3>
                                <p class="text-white" style="font-size: 12px;"><?php echo($bIngles ? 'The best attention and services' : 'La mejor atención y servicios')?></p>
                            </di>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button class="btn-carousel"><?php echo($bIngles ? 'Join the Network' : 'Quiero Unirme')?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Perfil" class="container text-center">
            <h2 class="AvenirBook" style="margin-top: 20px"><b><?php echo($bIngles ? 'Profile' : 'Perfil')?></b></h2>
            <p><?php echo($bIngles ? 'Proven track record in the health sector, hospitality, technology and marketing' : 'Reconocida trayectoria en el sector salud, hotelería, tecnología y comercialización.')?></p>
            <hr style="color: #979797; width: 35%">
        </div>
        <div id="MarketPlace">
            <div class="text-center">
                <h1 class="AvenirMedium" style="color: #03528C; margin: 0"><?php echo($bIngles ? 'Marketplace for Medical Tourism' : 'Marketplace para el Turismo Médico')?></h1>
            </div>
            <div class="container-fluid" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div style="width: 368px">
                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card" id="card01" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url(<?php echo($bIngles == 0 ? 'img/Esp1.png' : 'img/Eng1.png')?>); background-size: contain;">
                                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                                <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                    <?php echo($bIngles ? 'High quality medical' : 'Procedimientos médicos')?> <br>
                                                    <?php echo($bIngles ? 'procedures' : 'de alta calidad.')?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card" id="card01" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url(<?php echo($bIngles == 0 ? 'img/Esp2.png' : 'img/Eng2.png')?>); background-size: contain;">
                                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                                <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                    <?php echo($bIngles ? 'High quality medical' : 'Procedimientos médicos')?> <br>
                                                    <?php echo($bIngles ? 'procedures' : 'de alta calidad.')?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card" id="card01" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url(<?php echo($bIngles == 0 ? 'img/Esp3.png' : 'img/Eng3.png')?>); background-size: contain;">
                                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                                <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                    <?php echo($bIngles ? 'High quality medical' : 'Procedimientos médicos')?> <br>
                                                    <?php echo($bIngles ? 'procedures' : 'de alta calidad.')?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div style="width: 368px">
                            <div id="carouselExampleSlidesOnly02" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card" id="card01" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/Perfil02.png'); background-size: contain;">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'High quality medical' : 'Procedimientos médicos')?> <br>
                                                <?php echo($bIngles ? 'procedures' : 'de alta calidad.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card" id="card01" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/Perfil05.png'); background-size: contain;">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'High quality medical' : 'Procedimientos médicos')?> <br>
                                                <?php echo($bIngles ? 'procedures' : 'de alta calidad.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card" id="card01" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/Perfil08.png'); background-size: contain;">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'High quality medical' : 'Procedimientos médicos')?> <br>
                                                <?php echo($bIngles ? 'procedures' : 'de alta calidad.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" id="card03" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; transition:background-image 1.5s ease-in-out 0s; -moz-transition: background-image 1.5s ease-in-out 0s; -webkit-transition: background-image 1.5s ease-in-out 0s; background-image: url('img/Perfil03.png');">
                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                    <?php echo($bIngles ? 'Electronic Clinical Record,' : 'Expediente Clínico')?> <br>
                                    <?php echo($bIngles ? 'Telemedicine and Medical' : 'Electrónico, Telemedicina')?> <br>
                                    <?php echo($bIngles ? 'Contact Center' : 'y Contact Center Médico')?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="PropuestaValor" class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 altoMovil">
                    <img src="img/img_pt1.jpg" alt="" style="height: 100%;width: 100%;">
                </div>
                <div class="col-md-6 col-sm-12 altoMovil">
                    <img src="img/img_pt2.jpg" alt="" style="height: 100%;width: 100%;">
                    <div class="fondoAzulAltoMovil01"></div>
                    <div class="fondoAzulAltoMovil02">
                        <div style="width: 360px;position: absolute;">
                            <h2 class="AvenirBook letrasSociosTitulo" style="color: white; margin-bottom: 20px"><?php echo($bIngles ? 'Value Proposition:' : 'Propuesta de Valor:')?></h2>
                            <p class="AvenirBook letrasSociosParrafo" style="color: white;padding-left: 25px;">
                                <?php echo($bIngles ? 'Accreditation of Physicians, Specialists, Hospitals and Clinics.' : 'Acreditación de Médicos, Especialistas, Hospitales, Clínicas y  Consultorios.')?>
                            </p>
                            <p class="AvenirBook letrasSociosParrafo" style="color: white;padding-left: 25px;">
                                <?php echo($bIngles ? 'We empower our clients to choose the best alternatives in health and wellness.' : 'Empoderamos a nuestros clientes para la elección de las mejores alternativas en salud y bienestar.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Servicios" class="text-center" style="margin-bottom: 20px; margin-top: 20px">
            <h1 class="AvenirMedium" style="color: #03528C"><?php echo($bIngles ? 'Services' : 'Servicios')?></h1>
            <div class="container-fluid" style="margin-bottom: 50px; padding-left: 20px; padding-right: 20px;">
                <div class="row" style="justify-content: center">
                    <div class="col-lg-2 col-md-4 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="height: 250px;position: relative;width: 23rem;border-radius: 20px;background-image: url('img/Service01.png');background-size: cover;">
                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; padding: 0;">
                                <p class="fondoAzul"></p>
                                <p class="letrasFondoAzul">
                                    <?php echo($bIngles ? 'MEDICAL PROCEDURE PACKAGES' : 'PAQUETES DE PROCEDIMIENTOS MÉDICOS')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="height: 250px;position: relative;width: 23rem;border-radius: 20px;background-image: url('img/Service02.png');background-size: cover;">
                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; padding: 0;">
                                <p class="fondoAzul"></p>
                                <p class="letrasFondoAzul">
                                    <?php echo($bIngles ? 'PATIENT ASSESSMENT' : 'EVALUACIÓN DE')?> <br>
                                    <?php echo($bIngles ? '' : 'PACIENTES')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="height: 250px;position: relative;width: 23rem;border-radius: 20px;background-image: url('img/Service03.png');background-size: cover;">
                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; padding: 0;">
                                <p class="fondoAzul"></p>
                                <p class="letrasFondoAzul">
                                    <?php echo($bIngles ? 'TELECARE AND' : 'TELEASISTENCIA')?> <br>
                                    <?php echo($bIngles ? 'CONSULTATION' : 'Y CONSULTAS')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="height: 250px;position: relative;width: 23rem;border-radius: 20px;background-image: url('img/Service04.png');background-size: cover;">
                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; padding: 0;">
                                <p class="fondoAzul"></p>
                                <div class="letrasFondoAzul">
                                    <div style="width: 100%">
                                        <span style="color: white;font-size: 1rem;">CONCIERGE</span>
                                        <br>
                                        <label style="color: white; font-size: .7rem; width: 100%; padding-left: 10px;">
                                            <?php echo($bIngles ? 'Transportation, lodging, food' : 'Transportación, hospedaje,')?> <br>
                                            <?php echo($bIngles ? 'and tours' : 'alimentación y tours')?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="height: 250px;position: relative;width: 23rem;border-radius: 20px;background-image: url('img/Service05.png');background-size: cover;">
                            <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; padding: 0;">
                                <p class="fondoAzul"></p>
                                <p class="letrasFondoAzul">
                                    <?php echo($bIngles ? 'MEDICAL CONTACT CENTER' : 'CONTACT CENTER MÉDICO')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="Socios"></div>
                </div>
            </div>
        </div>
        <div id="SociosPartners" style="margin-bottom: 40px">
            <h1 class="text-center AvenirMedium"  style="color: #03528C"><?php echo($bIngles ? 'Partners' : 'Socios')?></h1>
    
            <div id="caruselSociosDesktop" class="carousel slide caruselSocios" data-ride="carousel">
                <ol class="carousel-indicators" style="margin-bottom: -25px;">
                    <li data-target="#caruselSociosDesktop" data-slide-to="0" class="active" style="background: #03528C; border-bottom: 0; border-top: 0; border-radius: 80px; width: 15px; height: 15px;"></li>
                    <li data-target="#caruselSociosDesktop" data-slide-to="1" style="background: #03528C; border-bottom: 0; border-top: 0; border-radius: 80px; width: 15px; height: 15px;"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/Socios01.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Medical Clusters' : 'Cluster Médicos')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/Socios02.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Medical Service Providers' : 'Proveedores de')?> <br>
                                                <?php echo($bIngles ? '' : 'Servicios Médicos.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/Socios03.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Concierge for Medical' : 'Concierge para Servicios')?> <br>
                                                <?php echo($bIngles ? 'and Tourism Services' : 'Médicos y Turísticos.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/Socios02.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Medical Service Providers' : 'Proveedores de')?> <br>
                                                <?php echo($bIngles ? '' : 'Servicios Médicos.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/Socios03.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Concierge for Medical' : 'Concierge para Servicios')?> <br>
                                                <?php echo($bIngles ? 'and Tourism Services' : 'Médicos y Turísticos.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 23rem; border-radius: 20px; background-image: url('img/SociosF.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Tour Operators' : 'Tour Operadores')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div id="caruselSociosMovil" class="carousel slide caruselMovilSocios" data-ride="carousel">
                <ol class="carousel-indicators" style="margin-bottom: -25px;">
                    <li data-target="#caruselSociosMovil" data-slide-to="0" class="active" style="background: #03528C; border-bottom: 0; border-top: 0; border-radius: 80px; width: 15px; height: 15px;"></li>
                    <li data-target="#caruselSociosMovil" data-slide-to="1" style="background: #03528C; border-bottom: 0; border-top: 0; border-radius: 80px; width: 15px; height: 15px;"></li>
                    <li data-target="#caruselSociosMovil" data-slide-to="2" style="background: #03528C; border-bottom: 0; border-top: 0; border-radius: 80px; width: 15px; height: 15px;"></li>
                    <li data-target="#caruselSociosMovil" data-slide-to="3" style="background: #03528C; border-bottom: 0; border-top: 0; border-radius: 80px; width: 15px; height: 15px;"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 18rem; border-radius: 20px; background-image: url('img/Socios01.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Medical Clusters' : 'Cluster Médicos')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 18rem; border-radius: 20px; background-image: url('img/Socios02.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Medical Service Providers' : 'Proveedores de')?> <br>
                                                <?php echo($bIngles ? '' : 'Servicios Médicos.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 18rem; border-radius: 20px; background-image: url('img/Socios03.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Concierge for Medical' : 'Concierge para Servicios')?> <br>
                                                <?php echo($bIngles ? 'and Tourism Services' : 'Médicos y Turísticos.')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 col-sm-12" style="display: flex; justify-content: center">
                                    <div class="card" style="height: 250px; position: relative; width: 18rem; border-radius: 20px; background-image: url('img/SociosF.png');">
                                        <div class="card-body" style="background: linear-gradient(#0000, #252527); border-radius: 20px; display: flex; justify-content: center;">
                                            <p style="color: white;position: absolute;bottom: 0;text-align: center;">
                                                <?php echo($bIngles ? 'Tour Operators' : 'Tour Operadores')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
        <div id="Procesos" class="text-center" style="margin-bottom: 20px">
            <h1 class="AvenirMedium" style="color: #03528C;"><?php echo($bIngles ? 'Our Process' : 'Nuestro Proceso')?></h1>
            <div class="text-center" style="width: 100%;">
                <img class="img-fluid Infografic" style="padding-top: 10px;" src="<?php echo($bIngles == 0 ? 'img/Esp.png' : 'img/bl.png')?>">
                <img class="img-fluid InfograficMovil" src="<?php echo($bIngles == 0 ? 'img/m_Esp.png' : 'img/m_bl.png')?>">
            </div>
        </div>
        <div id="Vinculaciones" class="text-center" style="margin-bottom: 20px">
            <h1 class="AvenirMedium" style="color: #03528C"><?php echo($bIngles ? 'Business Ecosystem' : 'Vinculaciones')?></h1>
            <div class="container">
                <div class="row" style="justify-content: space-around;">
                    <div class="col-lg-3 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="width: 18rem; display: flex; align-items: center">
                            <div style="width: 100px; height: 70px; align-items: center; display: flex; justify-content: center">
                                <img style="width: 70px;" src="img/Vinculo01.png">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo($bIngles ? 'Medical Tourism' : 'Clusters de Turismo')?> <br>
                                    <?php echo($bIngles ? 'Clusters in Mexico' : 'Médico en México')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="width: 18rem; display: flex; align-items: center">
                            <div style="width: 100px; height: 70px; align-items: center; display: flex;">
                                <img style="width: 107px;" src="img/Vinculo02.png">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    American Chamber <br>
                                    of Commerce of México <br>
                                    <?php echo($bIngles ? '' : '(Comité de Salud y Turismo)')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="width: 18rem; display: flex; align-items: center">
                            <div style="width: 100px; height: 70px; align-items: center; display: flex;">
                                <img style="width: 107px;" src="img/Vinculo03.png">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    ACCLA (Asociación de <br>
                                    Cámaras de Comercio <br>
                                    en América Latina)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="width: 18rem; display: flex; align-items: center">
                            <div style="width: 100px; height: 70px; align-items: center; display: flex;">
                                <img style="width: 107px;" src="img/Vinculo04.png">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo($bIngles ? 'Trade Consulates' : 'Consulados comerciales')?> <br>
                                    <?php echo($bIngles ? 'and Tourism Promotion' : 'y Promoción Turística')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="width: 18rem; display: flex; align-items: center">
                            <div style="width: 100px; height: 70px; align-items: center; display: flex;">
                                <img style="width: 107px;" src="img/Vinculo05.png">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo($bIngles ? 'Private investment funds' : 'Fondos de')?> <br>
                                    <?php echo($bIngles ? '' : 'inversión privados')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="width: 18rem; display: flex; align-items: center">
                            <div style="width: 100px; height: 70px; align-items: center; display: flex;">
                                <img style="width: 107px;" src="img/Vinculo06.png">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo($bIngles ? 'Business networks' : 'Redes empresariales')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12" style="display: flex; justify-content: center">
                        <div class="card" style="width: 18rem; display: flex; align-items: center">
                            <div style="width: 100px; height: 70px; align-items: center; display: flex;">
                                <img style="width: 107px;" src="img/Vinculo07.png">
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo($bIngles ? 'Goverment Support' : 'Programas de apoyo')?> <br>
                                    <?php echo($bIngles ? 'Programs for Health' : 'gubernamentales')?> <br>
                                    <?php echo($bIngles ? '' : 'para la Salud')?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 71px"></div>
    </div>

    <section style="background: #03528C">
        <div class="row d-flex align-items-center" style="background: none; margin: 0px; height: 70px;">
            <div class="col-md-4 Foto cellText" style="text-align: left; align-self: center; margin-top: 5px;">
                <label class="cellText text-white AvenirLight" style="font-size: 12px">Powered By: </label>
                <img src="img/LogoChoco.png" style="width: 81px;">
            </div>
            <div class="col-md-4 col-sm-12" style="align-self: center; text-align: center; font-size: .9rem;">
                <label class="cellText text-white AvenirLight"><?php echo($bIngles ? 'Copyright 2020 Better Life Medical Group.' : 'Derechos Reservados Better Life Medical Group 2020.')?></label>
            </div>
            <div class="col-md-4 col-sm-12 cellText" style="align-self: center; text-align: right; font-size: .9rem;">
                <label class="cellText text-white AvenirLight"><?php echo($bIngles ? 'Contact &nbsp;&nbsp;|&nbsp;&nbsp; Privacy Policy &nbsp;&nbsp;|&nbsp;&nbsp; Terms of Service' : 'Contacto &nbsp;&nbsp;|&nbsp;&nbsp; Aviso de Privacidad &nbsp;&nbsp;|&nbsp;&nbsp; Aviso Legal')?></label>
            </div>
        </div>
    </section>

    <script>
        $(document).on('click', '.btnRegresar',function (e) {
            e.preventDefault();
            window.history.back();
        });

        $(document).on('click', '.isDisabled', function (e) {
            e.preventDefault();
        });

        $('#ENG').on('click', function (e) {
            window.location.href = '/?eng=1';
        });

        $('#ESP').on('click', function (e) {
            window.location.href = '/';
        });

        $('#engMovil').on('click', function (e) {
            window.location.href = '/?eng=1';
        });

        $('#espMovil').on('click', function (e) {
            window.location.href = '/';
        });

        $('.link-servicios').on('click',function(e){
            e.preventDefault();

            var strAncla = $(this).attr('href'); //id del ancla

            $('body,html').stop(true,true).animate({
                scrollTop: $(strAncla).offset().top -90
            },100);

        });

        $('.link-socios').on('click',function(e){
            e.preventDefault();

            var strAncla = $(this).attr('href'); //id del ancla

            $('body,html').stop(true,true).animate({
                scrollTop: $(strAncla).offset().top +225
            },100);

        });

    </script>
    
</body>
</html>