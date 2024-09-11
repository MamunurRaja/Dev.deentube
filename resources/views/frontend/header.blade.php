<?php
error_reporting(0);
// ini_set('display_errors', 1);
if (!isset($_COOKIE['language_modal'])) {
    setcookie("language_modal", "home en", time() + (86400 * 30), "/");
}

$url = $_SERVER['REQUEST_URI'];
    $string = explode(".php", $url);
    $lan = explode('=', $url)[1];
?>

<?php
// $servername = "localhost";

// if ($_SERVER['DOCUMENT_ROOT'] == 'D:/xampp/htdocs') {
//     $username = "root";
//     $password = "";
//     $dbname = "devdisco_discover_counter";
// } else {
//     $username = "deentube_user";
//     $password = "F4b1(D~e7~kK";
//     $dbname = "deentube_db";
// }

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// if ($_SERVER['REQUEST_URI'] == '/index.php') {
//     $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
//     $conn->query($sql);
// }

// $sql = "SELECT visits FROM Counter WHERE id = 1";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $visits = $row["visits"];
//     }
// } else {
//     echo "no results";
// }

// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            <?php
            switch (htmlentities($_SERVER['PHP_SELF'])) {
                case '/espanol.php':
                    echo 'Traducción Corán en Español';
                    break;
                case '/hinduism.php':
                    echo 'Hinduism, Hindu, Indus, Aryan religion based on Vedas, Upanishads, and Bhagavad Gita. Hinduism and Islam find similarities. Quran Hindi Translation';
                    break;
                default:
                    echo "DeenTube";
            }
            ?>
        </title>
        <meta charset="UTF-8">
        <!-- Code For SEO-->
        <?php
        if (htmlentities($_SERVER['PHP_SELF'] == "/index.php")) {
            ?>
            <meta name="Description" content="Educational website true facts about Islam, Muslim, Allah, Quran Translation, Free Quran, Free e-books, PROPHETS OF GOD Adam, Noah, Abraham, Moses, Jesus and Muhammad final Messenger " />
            <meta name="keywords" content="quran, koran, quran translation, discover quran, discoverquran, discoverquran.com, ediscoverquran, islam, learn islam, muslim, one god, prophets, adam, noah, abraham, moses, jesus, muhammad, prophet muhammad, quran science, paradise, jannah in islam, purpose of life, eternal life,  hereafter, life after death, women islam, journey to islam, jesus in quran, mary in quran, angels, ibrahim" />

            <meta name="Description" content="Quran Translation | Muslim | Islam - PROPHETS OF GOD including Adam, Noah, Abraham, Moses, Jesus and Muhammad Final Prophet of God. Quran and Science. Quran Translation. Paradise or Jannah in Islam. Purpose of Life. Eternal Life Hereafter Life After Death. Women in Islam. Journey to Islam " />
            <meta name="keywords" content="discover quran,discoverquran,discoverquran.com,ediscoverquran,ediscoverquran.com,islam,muslim,muslims,quran,koran,learn islam,quran translation,koran translation,one god,phophet,prophets,adam,noah,abraham,moses,jesus,muhammad,mohammed,mohammad,prophet muhammad,prophet mohammed,phophet muhammed,science,quran science,quran translation,paradise,jannah,jannah in islam,purpose of life,eternal life, hereafter,life after death,women islam,journey to islam,mary,jesus in quran,mary in quran,angels,ishmael,ismail,isaac,ishak,jacob,yaqub,john,yahya ibn Zakariya,ibrahim,hagar,Hajira" />
            <?php
        }
        ?>
        <!--translation for google-->
        <meta name="google-translate-customization" content="9b11c7489e624f84-411a55f0de6fb89f-gd1a550bade4ac0c2-11">
        </meta>
        <!--google site verification-->
        <meta name="google-site-verification" content="HX7jojbiz6KhdlMmosWJyW6idCsRHSTGUXRdn-v5wBw" />

        <!--for IE browser-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--responsiveness for mobile device-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Chinese Traditional (Big5)-->
        <meta http-equiv="Content-Type" content="text/html; charset=big5">
        <!--Chinese Simplified (GB2312)-->
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
        <!--Japanese (Mac)-->
        <meta http-equiv="Content-Type" content="text/html; charset=shift-jis">
        <!--Korean (EUC)-->
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
        <!--UTF-8 - Character encoding for Unicode-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <style>
            #question_modal {
                margin-top: 75px;
                margin-right: 10px;
            }

            .video-category {
                font-weight: bold;
                font-size: 15px;
            }
        </style>
        <?php
        if (htmlentities($_SERVER['PHP_SELF']) == '/index.php') {
            echo '<style type="text/css">
                .read_quran{
                    height: 313px !important;
                }
                .all_languages{
                    width:100% !important;
                }
                @media screen and (max-width: 767px){
                    .listeQuran {
                        padding-right: 15px !important;
                        padding-left: 15px !important;
                        width:100% !important;
                    }
                    .sendaquran{
                      width: 100% !important;
                   }
                }
            </style>';
        } elseif (htmlentities($_SERVER['PHP_SELF']) == '/english.php') {

            echo '<style type="text/css">
                    @media screen and (max-width: 767px){
                     .all_languages {
                        width: 93% !important;
                        left: 3.5% !important;
                    }
                    .listeQuran{
                        padding-right: 0px !important;
                        padding-left: 0px !important;
                    }
                    .listeQuran{
                      width: 100% !important;
                      padding-left: 0px !important;
                      padding-right: 0px !important;
                   }
                   .sendaquran{
                      width: 100% !important;
                   }
            }</style>';
        }
        ?>
        <!-- Favicon Link -->
        <link rel="icon" type="image/png" href="favicon.ico" />

        <!-- Stylesheet for Bootstrap Core CSS-->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Stylesheet for Bootstrap Dropdown Select -->
        <link href="bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- Stylesheet for Fontwasome -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />-->
        <!--<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">

        <!-- Animate Css-->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

        <!-- Stylesheet for Audio Media Player -->
        <link rel="stylesheet" href="{{ asset('css/mediaelementplayer.min.css') }}" />

        <!-- Stylesheet for Google Fonts (Open Sans, Roboto Condensed)-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Bootstrap Datable-->
        <link rel="stylesheet" type="text/css" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

        <!-- Stylesheet for theme styling -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- 	<script type="text/javascript">
               $(function() {
                 $('.lazy').lazy();
               });
            </script> -->
        <!--<script type="text/javascript" src="jquery.lazy.min.js"></script>-->

        <!-- jQuery v3.1.0 -->
        <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>

        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

        <style>
            .mt-20 {
                margin-top: -22px;
            }

            .dq_first_slider_text .small {
                font-size: 40px;
            }

            .dq_first_slider_text .big {
                font-size: 60px;
            }

            .carousel .carousel-indicators {
                bottom: -14px;
            }

            .blar {
                background-color: rgba(0, 0, 0, 0.4);
            }

            #xx {
                margin-top: 150px;
            }

            #home-icon {
                margin-right: 1px !important;
            }

            .main_navbar .navbar-nav>li>a {
                padding: 15px 12px;
                color: white;
                -webkit-transition: all 0.25s;
                -moz-transition: all 0.25s;
                -ms-transition: all 0.25s;
                -o-transition: all 0.25s;
                transition: all 0.25s;
                font-size: 13px;
            }

            #home-icon {
                margin-right: 12px;
            }

            .main_navbar .navbar-nav>li>a .fa,
            .main_navbar .navbar-nav>li>a .fas {
                display: none;
            }

            #language-modal {
                margin-top: 44px;
            }

            .translate-bar {
                position: absolute;
                top: 0;
                width: 77%;
                margin-left: 0px;
            }

            .one-forth {
                width: 33%;
                float: left;
                color: #0000cc;
                padding-top: 20px;
            }

            #language-list-panel1 {
                display: none;
            }

            .one-forth ul li {
                list-style: none;
            }

            .one-forth div p {
                margin-bottom: 0;
            }

            .one-forth div p input[type="radio"] {
                margin-right: 10px;
            }

            .itemWrap:after {
                clear: both;
            }

            .itemWrap {
                display: none;
                transition: 0.5s;
            }

            .itemWrap.active {
                display: block;
                transition: 0.5s;
            }

            .itemWrap1:after {
                clear: both;
            }

            .itemWrap1 {
                display: none;
                transition: 0.5s;
            }

            .itemWrap1.active1 {
                display: block;
                transition: 0.5s;
            }


            .modal-content {
                width: 110%;
            }

            .one-forth div p label {
                font-weight: 400;
            }

            .x-1 {

                position: absolute;
                margin-top: -85px;
                margin-left: 188px;
            }

            #call-24 {
                width: 70%;
            }

            .banner .hadith {
                font-style: italic;
                margin-top: 10px;
                line-height: 21px;
                margin-left: -100px;
            }

            .carousel-inner>.item>img {
                width: 100%;
                height: 230px;
            }

            #question_modal_mobile {
                display: block !important;
                position: absolute;
                width: 41% !important;
                border: none !important;
                right: 0;
                margin-top: -88px;
            }

            #language-list-panel1 {
                position: absolute;
                width: 402px;
                z-index: +33;
                background: whitesmoke;
                left: -20px;
            }

            @media screen and (min-width: 1493px) {
                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 49px !important;
                    top: 5% !important;
                }

                .mt-20 {
                    margin-top: -3px;
                }
            }

            @media screen and (max-width: 1900px) {
                .hadith {
                    width: 699px;
                }

                .carousel-inner>.item>img {
                    width: 100%;
                    height: 230px;
                }

                .item:nth-child(1) .carousel-caption {
                    top: 0% !important;
                    font-size: 49px !important;
                }

                .mt-20 {
                    margin-top: 12px;
                }

                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -5% !important;
                    text-shadow: 3px 2px black;
                }

                .translate-bar {
                    position: absolute;
                    top: 0;
                    width: 65% !important;
                    margin-left: -70px;
                }

                #question_modal_mobile {
                    display: block !important;
                    position: absolute;
                    width: 41% !important;
                    border: none !important;
                    right: 48px;
                    margin-top: -88px;
                }



                .translate-bar {
                    display: block !important;
                    position: absolute;
                    top: 0;
                    width: 79% !important;
                    margin-left: -55px;
                }

                .banner .hadith {
                    margin-left: -100px;
                }
            }


            @media screen and (max-width: 1648px) {

                .translate-bar {
                    margin-left: 80px;
                }

                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -5% !important;
                    text-shadow: 3px 2px black;
                }

                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 0% !important;
                }

                .tm {
                    height: 194px;
                }

                .translate-bar {
                    display: block !important;
                }

                .mt-20 {
                    margin-top: 17px;
                }

                p {}
            }

            @media screen and (max-width: 1647px) {
                .carousel-inner>.item>img {
                    width: 100%;
                    height: 230px;
                }

                .dq_first_slider_text h1 {
                    font-size: 38px;
                }

                .banner .hadith {
                    font-style: italic;
                    margin-top: 10px;
                    line-height: 21px;
                    margin-right: -120px;
                }

                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 4% !important;
                }

                .dq_first_slider_text h1 {
                    font-size: 37px;
                }

                .mt-20 {
                    margin-top: 18px;
                }

            }

            @media screen and (max-width: 1565px) {
                .dq_first_slider_text h1 {
                    font-size: 36px;
                }

                .mt-20 {
                    margin-top: 27px;
                }

            }

            @media screen and (max-width: 1524px) {
                .dq_first_slider_text h1 {
                    font-size: 35px;
                }

                .mt-20 {
                    margin-top: 27px;
                }
            }


            @media screen and (max-width: 1450px) {
                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 6% !important;
                }

                .dq_first_slider_text h1 {
                    font-size: 34px;
                }

                .mt-20 {
                    margin-top: 24px;
                }

                .translate-bar {
                    margin-left: 100px;
                }

            }

            @media screen and (max-width: 1440px) and (orientation: landscape) {
                #iframe_video iframe {
                    height: 409px;
                }
            }

            @media screen and (max-width: 1441px) {
                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -2% !important;
                }

                .mt-20 {
                    margin-top: -5px;
                }

                .dq_first_slider_text h1 {
                    font-size: 34px;
                }

            }

            @media screen and (max-width: 1400px) {
                .translate-bar {
                    margin-left: 100px;
                }

                .mt-20 {
                    margin-top: -8px;
                }

                .dq_first_slider_text h1 {
                    font-size: 38px;
                }

                .carousel-inner>.item>img {
                    width: 100%;
                    height: 246px;
                }

                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -3% !important;
                }

                .dq_first_slider_text h1 {
                    font-size: 35px;
                }
            }

            @media screen and (max-width: 1280px) and (orientation: landscape) {

                #iframe_video iframe {
                    height: 460px;
                }
            }

            @media screen and (max-width: 1280px) {

                .dq_first_slider_text h1 {
                    font-size: 35px;
                }

                .translate-bar {
                    margin-left: 195px;
                }

                .banner .hadith {
                    margin-left: -148px;
                }

                #question_modal_mobile {
                    width: 48% !important;
                    right: 0;

                }

                .x1 {
                    width: 55%;
                }
            }

            @media screen and (max-width: 1200px) {
                .dq_first_slider_text h1 {
                    font-size: 33px;
                }

                .carousel-inner,
                .carousel .carousel-inner .item,
                .carousel-inner>.item>img {
                    height: 230px;
                }

                .banner {
                    height: 149px;
                }


                #call-24 {
                    width: 94%;
                }

                .banner .hadith {
                    margin-right: 28px;
                }

                .logo span {
                    position: absolute;
                    right: -19px;
                    bottom: -20px !important;
                    font-size: 0.9em;
                }

                .translate-bar {
                    margin-left: 126px;
                }

                .banner .hadith {
                    margin-left: -176px;
                }

                .mt-20 {
                    margin-top: 0px;
                }

            }

            @media screen and (max-width: 1090px) {
                .mt-20 {
                    margin-top: -2px;
                }

                .banner .hadith {
                    margin-left: -218px;
                }

                .translate-bar {
                    margin-left: 120px;
                }

                .dq_first_slider_text h1 {
                    font-size: 34px;
                }
            }

            @media screen and (max-width: 1058px) {
                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 5% !important;
                }

                .dq_first_slider_text h1 {
                    font-size: 30px;
                }

                .mt-20 {
                    margin-top: -5px;
                }

                .visits {
                    display: none;
                }

                .banner .hadith {
                    margin-left: -306px;
                }
            }


            @media screen and (max-width: 1027px) {

                .translate-bar {
                    margin-left: 158px;
                }

                .banner .hadith {
                    margin-left: -257px;
                }

                .dq_first_slider_text h1 {
                    font-size: 30px;
                }
            }

            @media screen and (max-width: 1025px) and (orientation: landscape) {
                #iframe_video iframe {
                    height: 379px;
                }
            }

            @media screen and (max-width: 1025px) {


                #bs-example-navbar-collapse-1 .navbar-nav>li {
                    float: left;
                    margin-right: 16px;
                }



            }

            @media screen and (max-width: 996px) {


                .dq_first_slider_text h1 {
                    font-size: 30px;
                }

                .mt-20 {
                    margin-top: -4px;
                }
            }

            @media screen and (max-width: 991px) {
                #call-24 {

                    width: 100%;

                }

                .x-1 {

                    height: 34px;
                }

                .hadith {
                    width: 442px;
                    margin-left: -85px;
                }
            }

            @media screen and (max-width: 992px) {
                .banner .hadith {
                    margin-left: -9px;
                }

                .translate-bar {
                    margin-left: 81px;
                }

                .visits {
                    display: none;
                }
            }




            @media screen and (max-width: 884px) {

                .banner .hadith {
                    margin-left: -54px;
                }

                .translate-bar {
                    margin-left: 114px;
                }

                #question_modal {
                    margin-top: 75px;
                    margin-right: 574px;
                }
            }

            @media screen and (max-width: 960px) and (orientation: landscape) {

                #iframe_video iframe {
                    height: 353px;
                }
            }

            @media screen and (max-width: 965px) {
                .dq_first_slider_text h1 {
                    font-size: 30px;
                }

                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -4% !important;
                }

                .mt-20 {
                    margin-top: 24px;
                }
            }

            @media screen and (max-width: 960px) {

                .mt-20 {
                    margin-top: -15px;
                }

                #iframe_video iframe {
                    height: 353px;
                }
            }

            @media screen and (max-width: 854px) and (orientation: landscape) {
                #iframe_video iframe {
                    height: 280px;
                }
            }


            @media screen and (max-width: 932px) {
                .dq_first_slider_text h1 {
                    font-size: 29px;
                }

            }

            @media screen and (max-width: 909px) {
                #call-24 {
                    width: 102%;
                }

                .banner .hadith {
                    margin-left: -72px;
                }

                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -5% !important;
                }
            }

            @media screen and (max-width: 901px) {

                .mt-20 {
                    margin-top: 1px;
                }
            }

            @media screen and (max-width: 870px) {
                .dq_first_slider_text h1 {
                    font-size: 27px;
                }

                .mt-20 {
                    margin-top: 15px;
                }

            }

            @media screen and (max-width: 854px) {

                .dq_first_slider_text h1 {
                    font-size: 28px;
                }
            }

            @media screen and (max-width: 846px) {
                .hadith {
                    margin-left: -158px;
                }

                .x-1 {

                    height: 34px;
                }

                #call-24 {
                    width: 98%;
                }

            }

            @media screen and (max-width: 839px) {
                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 9% !important;
                }

                .dq_first_slider_text h1 {
                    font-size: 26px;
                }

            }

            @media screen and (max-width: 824px) {
                .dq_first_slider_text h1 {
                    font-size: 26px;
                }
            }

            @media screen and (max-width: 812px) and (orientation: landscape) {
                #iframe_video iframe {
                    height: 159px;
                }

            }

            @media screen and (max-width: 809px) {
                .hadith {
                    width: 581px;
                    margin-left: -192px;
                }

                .x-1 {

                    height: 34px;
                }

                #question_modal_mobile {
                    margin-top: -81px !important;
                }

                #lana {
                    width: 40%;
                }

                .banner .hadith {
                    margin-left: -207px;
                    display: block;
                }

                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -2% !important;
                }

            }


            @media screen and (max-width: 797px) {
                .banner .hadith {
                    display: block;
                }

                #call-24 {
                    width: 102%;
                }

                .dq_first_slider_text h1 {
                    font-size: 26px;
                }
            }




            @media screen and (max-width: 823px) {

                .translate-bar {
                    margin-left: 138px;
                }

                .visits {
                    display: none;
                }

                .x-1 {
                    position: absolute;
                    margin-top: -77px;
                    margin-left: 188px;
                    width: 224px;
                }

                .hadith p {
                    width: 96%;
                }

                #question_modal_mobile {
                    margin-top: 20px;

                }
            }

            @media screen and (max-width: 812px) {
                #call-24 {
                    width: 102%;
                }

                .logo span {
                    position: absolute;
                    left: 10;
                    bottom: -20px !important;
                    font-size: 0.9em;
                }

            }

            @media screen and (max-width: 823px) and (min-width: 810px) {
                #language-list-panel1 {
                    position: absolute;
                    width: 127%;
                    left: -85px;
                }

                .translate-bar {
                    display: block;
                }

                .translate-bar {
                    display: none;
                }

                .banner .hadith {
                    display: block;
                }

                #question_modal_mobile {
                    width: 40% !important;
                    display: block !important;
                    margin-top: -78px !important;
                    float: right !important;
                    margin-right: 10px !important;
                }

                #call-24 {
                    width: 100%;
                }

                .seal {
                    margin-left: 265px !important;
                }

                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: -74px;
                    margin-left: 197px;
                }


            }

            @media screen and (max-width: 822px) {
                .translate-bar {
                    display: block !important;
                }
            }

            @media screen and (max-width: 800px) {
                #call-24 {
                    width: 102%;
                }

                .logo span {
                    right: -11px;
                }

                .translate-bar {
                    display: block !important;
                }

                #tm {
                    height: 251px;

                }

                #question_modal_mobile {
                    margin-top: -79px !important;
                }

                .hadith {
                    display: none;
                }

                .x-1 {
                    position: absolute;
                    margin-top: -81px;
                    margin-left: 188px;
                    width: 224px;
                }
            }

            @media screen and (max-width: 795px) {
                .item:nth-child(1) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -3% !important;
                }

                #call-24 {
                    width: 102%;
                    /* margin-left: -27px; */
                    margin-right: -22px;
                }

                #question_modal_mobile {
                    width: 40% !important;
                    margin-right: 24px;

                }

                .modal-content {
                    width: 100%;
                }

            }

            @media screen and (max-width: 794px) {
                #call-24 {
                    width: 117%;
                    /* margin-left: -27px; */
                    margin-right: -76px;
                }
            }

            @media screen and (max-width: 992px) and (min-width: 768px) {
                .main_navbar .navbar-nav>li>a {
                    padding: 15px 15px;
                    font-size: 16px !important;
                }

            }

            @media screen and (max-width: 768px) {

                .logo {
                    height: 96px;
                }
                .main_navbar .navbar-nav>li>a {
                    padding: 15px 15px;
                    font-size: 16px;
                }

                .dq_first_slider_text h1 {
                    font-size: 28px;
                }


                .banner {
                    margin-bottom: -62px;
                }

                .logo a {
                    margin-bottom: 35px;
                }

                .banner {
                    margin-bottom: 0px;
                }

                .hadith {
                    display: block !important;
                }

                .x-1 {
                    position: absolute;
                    margin-top: -102px;
                    margin-left: 188px;
                    width: 224px;
                }




                #language-list-panel1 {
                    background: white;
                    position: absolute;
                    z-index: 28;
                    margin-left: -50px;
                    border: 1px solid lightgray;
                    margin-top: 7px;
                    padding-bottom: 15px;
                }

                .logo span {
                    position: absolute;
                    right: 0;
                    bottom: 12px !important;
                    font-size: 0.9em;
                }


                .main_navbar div {
                    margin-top: 0px;
                }

                .main_navbar .navbar-nav>li>a {
                    padding: 15px 17px;
                    font-size: 17px;
                }

                #home-icon {
                    margin-right: 8px !important;
                }

                #call-24 {
                    width: 103%;
                    margin-right: -35px;
                }

                #lana {
                    width: 47%;
                }

                #nxijs {
                    height: 179px !important;
                }

                #visitor {
                    display: none;
                }

                #bs-example-navbar-collapse-1 .navbar-nav>li {
                    float: left;
                    margin-right: 12px;
                }

                .nameOfAllah {
                    width: 80% !important;
                    text-align: left;
                }

                .translate-bar {
                    position: absolute;
                    top: 3px;
                    width: 100%;
                    margin-left: 0px;
                }

                .no1 {
                    height: 133px;
                }

                .no2 {
                    height: 133px;
                }

                #question_modal_mobile {
                    width: 40% !important;
                    margin-right: 27px;
                }

                .translate-bar {
                    margin-left: 150px;
                }


                .navbar-nav {
                    width: 100%;
                }

                .mt-20 {
                    margin-top: -4px;
                }

            }

            @media screen and (max-width: 767px) {

                .logo span {
                    position: absolute;
                    right: 0;
                    bottom: -26px !important;
                    font-size: 0.9em;
                }


                .main_navbar .navbar-nav>li>a .fa,
                .main_navbar .navbar-nav>li>a .fas {
                    display: block;
                    width: 30px;
                    float: left;
                }

                #question_modal_mobile {
                    width: 40% !important;
                    margin-top: 0px !important;
                    margin-right: 31px;
                }

                #language-list-panel1 {

                    margin-left: 118px;

                }

                .main_navbar div {
                    margin-top: 0;
                }

                .banner {
                    height: 155px;
                }

                #call-24 {
                    width: 84%;
                }

                #question_modal_mobile {
                    width: 93% !important;
                    display: block !important;
                    margin-top: 141px !important;
                    top: 54px;
                }

                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: 24px;
                    margin-left: 195px;
                }

                .nameOfAllah {
                    width: 100% !important;
                    text-align: center;
                }

                .translate-bar {
                    display: none !important;
                }

                #xxxx {
                    position: absolute;
                    top: 110px;
                    z-index: +34;
                    background: #468390;

                }

                #bs-example-navbar-collapse-1 .navbar-nav>li {
                    width: 100%;
                    border-bottom: 1px solid #468390;
                }

                #bs-example-navbar-collapse-1 .navbar-nav>li:last-child {

                    margin-bottom: 20px;
                }

                #bs-example-navbar-collapse-1 .navbar-nav>li a {
                    text-align: left;
                    padding-left: 15px;
                }

                .navbar-default {

                    background: white;
                }

                .navbar-nav {
                    margin: 0.5px -15px;
                }

                .main_navbar .navbar-nav>li>a {
                    padding: 10px 20px !important;
                }
            }

            @media screen and (max-width: 736px) and (orientation: landscape) {

                #iframe_video iframe {
                    height: 200px;
                }
            }

            @media screen and (max-width: 736px) {

                #question_modal_mobile {
                    width: 93%;
                    display: block !important;
                    margin-top: 174px !important;
                }

                #call-24 {
                    width: 82%;
                    margin-right: 0px;
                }

                .x-1 {
                    position: absolute;
                    margin-top: 42px;
                    margin-left: 240px;
                    height: 33px;
                }

                #lana {
                    width: 48%;
                }
            }


            @media screen and (max-width: 667px) {
                #question_modal_mobile {
                    margin-top: 166px !important;
                }

                .translate-bar {
                    display: none !important;
                }

            }

            @media screen and (max-width: 653px) {
                .seal {
                    margin-left: 221px;
                    width: 166px;
                }

                #question_modal_mobile {
                    margin-top: 170px !important;
                }

                .banner {
                    height: 160px;
                }

            }

            @media screen and (max-width: 640px) and (orientation: landscape) {

                #iframe_video iframe {
                    height: 189px;
                }
            }

            @media screen and (max-width: 640px) {
                .dq_first_slider_text h1 {
                    font-size: 27px;
                }

                #call-24 {
                    width: 86%;

                }

                #question_modal_mobile {
                    margin-top: 154px !important;
                }

                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: 36px;
                    margin-left: 143px;
                }

                .nameOfAllah {
                    width: 100% !important;
                    text-align: center;
                }

                .translate-bar {
                    display: none;
                }
            }

            @media screen and (max-width: 636px) {
                .dq_first_slider_text .small {
                    font-size: 31px;
                }

                .dq_first_slider_text .big {
                    font-size: 60px;
                }

                .item:nth-child(1) .carousel-caption {
                    top: -5% !important;
                }

                .mt-20 {
                    margin-top: -20px;
                }
            }


            @media screen and (max-width: 600px) {
                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -2% !important;
                    text-shadow: 3px 2px black;
                }

                .dq_first_slider_text h1 {
                    font-size: 23px;
                }

                .banner {
                    height: 150px;
                }

                #question_modal_mobile {
                    margin-top: 154px !important;
                }

            }

            @media screen and (max-width: 568px) and (orientation: landscape) {
                #iframe_video iframe {
                    height: 142px;
                }
            }

            @media screen and (max-width: 568px) {
                #iframe_video iframe {
                    height: 291px;
                }

                .translate-bar {
                    display: none;
                }

                #question_modal_mobile {
                    margin-top: 166px !important;
                }

                #language-list-panel1 {
                    position: absolute;
                    width: 91%;
                    left: 99px;
                }

                #nxijs {
                    height: 113px !important;
                }
            }


            @media screen and (max-width: 548px) {
                .item:nth-child(1) .carousel-caption {
                    top: -1% !important;
                }

                .dq_first_slider_text .small {
                    font-size: 31px;
                }

                .dq_first_slider_text .big {
                    font-size: 56px;
                }

                .dq_first_slider_text h1 {
                    font-size: 22px;
                }

                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -5% !important;
                    text-shadow: 3px 2px black;
                }
            }

            @media screen and (max-width: 501px) {
                .item:nth-child(1) .carousel-caption {
                    top: -1% !important;
                }

                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 8% !important;
                    text-shadow: 3px 2px black;
                }

                .dq_first_slider_text .small {
                    font-size: 28px;
                }

                .dq_first_slider_text .big {
                    font-size: 60px;
                }

                .dq_first_slider_text h1 {
                    font-size: 23px;
                }


                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: 30px;
                    margin-left: 118px;
                }


                #call-24 {
                    width: 90%;
                }

                .mt-20 {
                    margin-top: -7px;
                }

            }


            @media screen and (max-width: 491px) {
                .dq_first_slider_text .small {
                    font-size: 28px;
                }

                .m {
                    height: 204px;
                }

                .carousel-inner,
                .carousel .carousel-inner .item,
                .carousel-inner>.item>img {
                    height: 226px;
                }

                .seal {
                    margin-left: 133px;
                    width: 166px;
                }

                #chart {
                    font-size: 14px;
                }

                .no2 {
                    height: 151px;
                }

                .no1 {
                    height: 127px;
                }

                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: 38px;
                    margin-left: 110px;
                }

                .translate-bar {
                    display: none;
                }

                .text {
                    text-align: center;
                    width: 100%;
                }

                #question_modal_mobile {
                    width: 93%;
                    display: block !important;
                    margin-top: 40px;
                }

                #call-24 {
                    width: 91%;
                }

                .banner {
                    height: 290px;
                }
            }

            @media screen and (max-width: 492px) {

                #call-24 {
                    width: 91%;
                }

                .banner {
                    height: 200px;
                }
            }

            @media screen and (max-width: 493px) {
                .banner {
                    height: 240px;
                }
            }

            @media screen and (max-width: 480px) {
                #call-24 {
                    width: 91%;
                    margin-bottom: 0px;
                }

                .banner {
                    height: 147px;
                }

                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: 31px;
                    margin-left: 128px;
                }


                .seal {
                    margin-left: 123px;
                    width: 166px;
                }

                #chart {
                    font-size: 13px !important;
                }

                .translate-bar {
                    display: none;
                }

                .nameOfAllah {
                    width: 100% !important;
                    text-align: center;
                }

                #question_modal_mobile {
                    display: block !important;
                    position: relative;
                    top: 39px;
                    right: 0;
                    width: 93% !important;
                    border: none !important;
                    margin-top: 0px !important;
                }




                #language-list-panel1 {
                    background: white;
                    position: absolute;
                    z-index: 27;
                    width: 410px;
                    margin-left: 364px;
                    border: 1px solid lightgray;
                    margin-top: 8px;
                    padding-bottom: 15px;

                }

            }

            @media screen and (max-width: 450px) {
                .banner1 {
                    height: 100% !important;

                }

                #lana {
                    width: 43%;
                }

                .seal {
                    margin-left: 111px;
                    width: 166px;
                }

                .abraham {
                    margin-left: -10px;
                }

                .seal {
                    margin-left: 122px;
                    width: 166px;
                }
            }

            @media screen and (max-width: 425px) {
                .item:nth-child(1) .carousel-caption {
                    top: -1% !important;
                }

                .dq_first_slider_text .small {
                    font-size: 25px;
                }

                .dq_first_slider_text .big {
                    font-size: 60px;
                }



                .dq_first_slider_text h1 {
                    font-size: 21px;
                }

                #call-24 {
                    margin-bottom: 0px;
                    width: 98%;
                }


                .x-1 {
                    position: absolute;
                    margin-top: 29px;
                    height: 37px;
                    margin-left: 71px;
                }

                #language-list-panel1 {
                    margin-left: -96px;
                    width: 100%;
                }

                #visitor {
                    display: none;
                }

                .nameOfAllah {
                    width: 100% !important;
                    text-align: center;
                }

                .modal-content {
                    width: 100%;
                }

                .one-forth div p input[type="radio"] {
                    margin-right: 5px;
                }

                .one-forth div p {
                    font-size: 13px;
                }

                .haitian {
                    font-size: 11px !important;
                }

                .kno {
                    font-size: 10px !important;
                }


                .translate-bar {
                    display: none;
                }

                .top_bar .btn {
                    background: #fff;
                    padding: 11px 11px;
                }


            }

            @media screen and (max-width: 414px) {
                .banner {
                    height: 153px;
                }

                .logo {
                    height: 120px;
                }

                #question_modal_mobile {
                    margin-top: 60px !important;
                }

                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 5% !important;
                    text-shadow: 3px 2px black;
                }
            }



            @media screen and (max-width: 412px) {

                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 5% !important;
                    text-shadow: 3px 2px black;
                }

                .banner {
                    height: 156px;
                }

                #question_modal_mobile {
                    margin-top: 60px !important;
                    top: 35px;
                }
            }

            @media screen and (max-width: 400px) {
                .banner {
                    height: 158px;
                }
            }

            @media screen and (max-width: 384px) {
                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 12% !important;
                    text-shadow: 3px 2px black;
                }
            }

            @media screen and (max-width: 375px) {
                #question_modal_mobile {
                    margin-top: 67px !important;
                }
                .main_navbar div {
                    margin-top: 0px;
                }
                #call-24 {
                    margin-bottom: 45px;
                }
                .logo {
                    height: 96px;
                }
                .x-1 {
                    position: absolute;
                    margin-top: 96px;
                    height: 33px;
                    margin-left: 65px;
                }
                #language-list-panel1 {
                    margin-left: -99px;
                    width: 100%;
                }
                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 1% !important;
                    text-shadow: 3px 2px black;
                }
            }

            @media screen and (max-width: 360px) {
                .mt-20 {
                    margin-top: -12px;
                }
                .dq_first_slider_text h1 {
                    font-size: 22px;
                }
                .banner {
                    height: 166px;
                }
                #question_modal_mobile {
                    top: 24px;
                    margin-top: 35px !important;
                }
                .x-1 {
                    position: absolute;
                    margin-top: 78px;
                    height: 33px;
                    margin-left: 65px;
                }
                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: 1% !important;
                    text-shadow: 3px 2px black;
                }

            }

            @media screen and (max-width: 320px) {
                .mt-20 {
                    margin-top: -2px;
                }

                .dq_first_slider_text h1 {
                    font-size: 18px;
                }

                #language-list-panel1 {
                    width: 323px;
                    margin-left: -112px;
                }

                .banner {
                    height: 170px;
                }

                #question_modal_mobile {
                    right: 9px;
                }

                #call-24 {
                    margin-bottom: 45px;
                }


                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: 82px;
                    margin-left: 24px;
                }

                #lana {
                    width: 41%;
                }

                .top_bar {
                    height: 51px;
                }

                .pur iframe {
                    height: 201px !important;
                }

                #chart {
                    font-size: 11px !important;
                }

                #document {
                    width: 95%;
                }

                #cherecter-list {
                    background: #fff;
                    width: 62%;
                    font-size: 14px;
                }

                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -9% !important;
                    text-shadow: 3px 2px black;
                }

            }

            @media screen and (max-width: 312px) {
                .banner {
                    height: 199px;
                }
            }



            @media screen and (max-width: 282px) {
                .banner {
                    height: 199px;
                }
            }


            @media screen and (max-width: 280px) {
                .thumbnail .caption>h3 {
                    font-size: 15px;
                    margin: 0 0 5px 0;
                    min-height: 50px;
                }

                .g-recaptcha div div iframe {
                    width: 240px;
                }

                .g-recaptcha div {
                    width: 120px !important;
                }

                #question_modal_mobile {
                    right: 1px;
                }

                #xx {
                    margin-top: -6px;
                }

                .banner {
                    height: 203px;
                }

                #lana {
                    width: 46%;
                    margin-left: -11px;
                }

                .seal {
                    margin-left: 35px !important;
                }

                .banner2 {
                    height: 100% !important;
                }

                .h100 {
                    height: 100px !important;
                }

                .caption {
                    height: 135px !important;
                }

                #language-header label {
                    font-size: 12px;
                }

                #chart .table .th {
                    padding: 1em 0em !important;
                }

                .abraham {
                    /*margin-left: -14px;*/
                }

                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: 81px;
                    margin-left: 24px;
                }

                #question_modal_mobile {
                    margin-top: 63px !important;
                }

                #cherecter-list table {
                    margin-left: -13px;
                }

                #cherecter-list .table>tbody>tr>td,
                .table>tbody>tr>th,
                .table>tfoot>tr>td,
                .table>tfoot>tr>th,
                .table>thead>tr>td,
                .table>thead>tr>th {
                    padding: 0px !important;
                }

                .item:nth-child(2) .carousel-caption {
                    line-height: 1em !important;
                    font-size: 3em !important;
                    top: -12% !important;
                    text-shadow: 3px 2px black;
                }

            }

            @media screen and (max-width: 240px) {
                .g-recaptcha div div iframe {
                    width: 220px;
                }

                .g-recaptcha div {
                    width: 120px !important;
                }

                .x-1 {
                    position: absolute;
                    height: 33px;
                    margin-top: 81px;
                    margin-left: -6px;
                }

                .banner .logo {
                    margin-top: 43px;
                }

                #lana {
                    width: 36%;
                    margin-left: -12px;
                }

                #question_modal_mobile {
                    width: 94% !important;
                }

                #language-header label {
                    font-size: 10px;
                }
            }

            .listen_read .item ul li::before {
                font-family: "Font Awesome 5 Free" !important;
                -webkit-font-smoothing: antialiased;
                position: absolute;
                left: 0;
                top: 0;
                content: "\f144" !important;
                font-size: 20px;
                color: #204c55;
            }

            #cherecter-list .table>tbody>tr>td:first-child,
            .table>tbody>tr>th:first-child,
            .table>thead>tr>td:first-child,
            .table>thead>tr>th:first-child {
                width: 10%;
            }




            form.example input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
            }

            form.example button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #204c55;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
            }

            form.example button:hover {
                font-size: 20px;
            }

            form.example::after {
                content: "";
                clear: both;
                display: table;
            }

            .nopadding {
                padding: 0 !important;
                margin: 0 !important;
            }

            .nopaddingSearch {
                padding-right: 0 !important;
                margin-right: 0 !important;

            }

            .nopaddingUpload {
                margin-right: -15px !important;
            }

            .containerMenu {
                width: 1270px !important;
                margin-left: 75px;
                padding-right: 82px;
            }
        </style>
    </head>

    <body id="app">
        <!-- Header Section -->
        <header>
            <!-- Top Bar Section -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">

                        <div class="padding_10_640 forty_640 col-xs-7 col-sm-6 col-md-5 col-lg-3 visits">
                            <span id="visitor" class="text"> Visitors : <?php print $visits; ?></span>

                        </div>
                        <div class="padding_10_640 forty_640 col-xs-7 col-sm-6 col-md-5 col-lg-4 nameOfAllah">
                            <div class="text"><span class="first">In the name of Allah (God), </span> <span class="second">Most Gracious, Most Merciful.</span></div>
                        </div>

                        <div class="padding_10_640 forty_640 col-xs-7 col-sm-6 col-md-5 col-lg-3 visits">
                        </div>

                        <!--<div class="padding_10_640 col-xs-1 ten_640 text-center">
                            </div>
                            <div class="padding_10_640 half_640 col-xs-4 col-sm-5 col-md-3 col-lg-1 col-lg-offset-1"> 
                            </div>-->
                        <div class="translate-bar col-md-3 col-lg-5 text-right toplanguages">
                            <!-- <span id="visitor" class="text" style="padding-left: 13px; padding-right:13px">Register </span>
                                                            <span id="visitor" class="text">|</span>
                                                    <span id="visitor" class="text" style="padding-left: 13px; padding-right:13px"> Login</span>  -->
                            <a href="javascript:void(0)" href="https://discoverquran.com/" title="Bookmark this page" id="bookmarkme" class="btn btn-default dark"><i class="fa fa-star"></i></a>

                            <script language="javascript" type="text/javascript">
                                $(document).ready(function () {
                                    $("#bookmarkme").click(function (e) {
                                        e.preventDefault(); // this will prevent the anchor tag from going the user off to the link
                                        var bookmarkUrl = this.href;
                                        var bookmarkTitle = this.title;

                                        if (window.sidebar) { // For Mozilla Firefox Bookmark
                                            window.sidebar.addPanel(bookmarkTitle, bookmarkUrl, "");
                                        } else if (window.external || document.all) { // For IE Favorite
                                            window.external.AddFavorite(bookmarkUrl, bookmarkTitle);
                                        } else if (window.opera) { // For Opera Browsers
                                            $("#bookmarkme").attr("href", bookmarkUrl);
                                            $("#bookmarkme").attr("title", bookmarkTitle);
                                            $("#bookmarkme").attr("rel", "sidebar");
                                        } else { // for other browsers which does not support
                                            alert('Your browser does not support this bookmark action');
                                            return false;
                                        }
                                    });
                                });
                            </script>
                            <!-- <span class="selection_modal btn btn-default dark" data-toggle="modal" data-target="#question_modal">Select <span class="hide_640">your</span> Religion</span> -->
                            <!--img src="images/select_language_icon.jpg" alt="" /-->
                            <div id="google_translate_element">
                            </div>
                            <?php
                            switch (htmlentities($_SERVER['PHP_SELF'])) {
                                case '/espanol.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/es; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/es; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/hindi.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/hi; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/hi; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/urdu.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/ur; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/ur; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/bengali.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/bn; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/bn; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/arabic.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/ar; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/ar; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/french.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/fr; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/fr; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/german.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/de; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/de; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/chinese.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/zh-CN; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/zh-CN; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/russian.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/ru; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/ru; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/albanian.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/sq; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/sq; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/azerbaijan.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/az; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/az; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/bosnian.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/bs; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/bs; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/burmese.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/my; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/my; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/bulgarian.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/bg; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/bg; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/danish.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/da; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/da; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/filipino.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/tl; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/tl; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/japanese.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/ja; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/ja; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/kazakh.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/kk; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/kk; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                case '/korean.php':
                                    ?>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/ko; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/ko; expires=Thu, 07-Mar-4999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <?php
                                    break;
                                default:
                                    ?>

                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            var ckDomain;
                                            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                                ckDomain.shift();
                                            }
                                            ckDomain = ";domain=" + ckDomain.join(".");
                                            // domain cookie
                                            document.cookie = "googtrans=/en/en; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/" + ckDomain;
                                            // host-only cookie (with no domain name definition)
                                            document.cookie = "googtrans=/en/en; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/";
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: false,
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                <?php
                            }
                            ?>
                            <?php
                            if ($_GET['lang']) {
                                $lang = $_GET['lang'];
                                ?>
                                <script>
                                    var lang = "<?php echo $lang; ?>";

                                    function googleTranslateElementInit() {
                                        var ckDomain;
                                        for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length; ) {
                                            ckDomain.shift();
                                        }
                                        ckDomain = ";domain=" + ckDomain.join(".");
                                        // domain cookie
                                        document.cookie = `googtrans=/en/${lang}; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/` + ckDomain;
                                        // host-only cookie (with no domain name definition)
                                        document.cookie = `googtrans=/en/${lang}; expires=Thu, 07-Mar-3999 20:22:40 GMT; path=/`;
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en',
                                            autoDisplay: false,
                                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                        }, 'google_translate_element');

                                    }
                                </script>
                            <?php } ?>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        </div>
                    </div>
                </div>
            </div><!-- End Top Bar-->

            <!-- Banner Section -->
            <div class="banner">
                <div class="container">
                    <div id="nxijs" class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">

                            <div class="logo">
                                <a href="index.php" style="padding-bottom: 20px;">
                                    <img src="images/logo.gif" alt="" class="img-responsive" style="padding-top: 20px;padding-left: 10px;" />
                                </a>
                                                                       <!-- <img class="x-1" style="" src="img/icon1.png" />
                                                                                                  <img class="x-1" style="" src="img/symbol.jpg" />
                                                                                                  <img class="x-2" style="    " src="img/symbol2.jpg" />
                                                                       <img class="x-3" style="    " src="img/sikhism3.jpg" /> -->
                                <?php if ($selected_language == "bn") { ?>
                                                                                                                   <!-- <span id="call-24" class="notranslate" style="width: 73%; margin-left: 10px;"><strong>
                                                                                                                           <div class="question notranslate">ইসলাম সম্পর্কে প্রশ্ন? </div>
                                                                                                                           <div style="font-size: 14px;" class="phoneNumber "> &nbsp; ২৪ ঘন্টা কল করুন: 1-800-662-ISLAM (4756)</div>
                                                                                                                       </strong></span> -->

                                <?php } else { ?>
                                                                         <!--<span id="call-24"  class="notranslate"><strong><div class="question">Question about Islam? </div><div style="font-size: 14px;" class="phoneNumber"> &nbsp; Call 24 hours: 1-800-662-ISLAM (4756)</div></strong></span>--> 
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-8 col-md-8 col-lg-6 text-right hidden-xs nopaddingSearch">
                            <ul class="nav navbar-nav">
                                <li class=""><a href="registration.php" style="font-weight: bold; font-size: 16px;">Register</a></li>
                                <li class=""><a href="login.php" style="font-weight: bold; font-size: 16px;">Login</a></li>
                                <li><a href="https://www.facebook.com/deentubeweeklyreminder" target="_blank"><span class="fab fa-facebook" style="font-size: 24px;"></span></a></li>
                                <li><a href="https://www.youtube.com/c/DeenTubeWeeklyReminder" target="_blank"><span class="fab fa-youtube" style="font-size: 24px;"></span></a></li>
                                <li><a href="https://twitter.com/deentubecom" target="_blank"><span class="fab fa-twitter" style="font-size: 24px;"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin" style="font-size: 24px;"></span></a></li>

                                <?php
                                $file_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

                                if ($file_name == 'local.php' || $file_name == 'local_video.php' || $file_name == 'local_video.php') {
                                    ?>
                                    <li style="margin-left: 70px;"><a href="index.php" class="text-reset" style="font-size: 14px; background-color: unset;">YouTube</a></span></a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li style="margin-left: 85px;"><a href="local.php" class="text-reset" style="font-size: 14px; background-color: unset;">Local</a></li>
                                    <?php
                                }
                                ?>

                            </ul>
                            <form class="example" action="/action_page.php">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Banner Section -->
        </header><!-- End Header -->
        <!-- Nav bar Section -->
        <nav class="navbar navbar-default main_navbar">
            <div id="xxxx" class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button style="position: absolute; top: -50px; left: 25px;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="ChangeToggle" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <div id="navbar-hamburger">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </div>
                        <div style="padding: 0 6px;" id="navbar-close" class="hidden">
                            <span class="glyphicon glyphicon-remove"></span>
                        </div>

                    </button>
                    <!--<a class="navbar-brand visible-xs" href="#">Navigation</a>-->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nopadding" id="bs-example-navbar-collapse-1">
                    <div class="col-lg-9">
                        <ul class="nav navbar-nav">
                            <?php $file_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>
                            <li class="<?= ($file_name == 'index.php' || $file_name == 'discoverquran_html') ? 'active' : '' ?>"><a href="index.php"><i id="home-icon" class="glyphicon glyphicon-home"></i> <?php echo ($selected_language == "bn") ? "হোম" : 'Home'; ?> <span class="sr-only">(current)</span></a></li>
                            <!--<li class="<?php // echo ($file_name == 'server.php') ? 'active' : ''     ?>"><a href="server.php"> Server <span class="sr-only"></span></a></li>-->
                            <li class="<?= ($file_name == 'popular.php') ? 'active' : '' ?>"><a href="#">Popular Video</a></li>
                            <li class="<?= ($file_name == 'new_release.php') ? 'active' : '' ?>"><a href="#">New Release</a></li>
                            <li class="<?= ($file_name == 'kids.php') ? 'active' : '' ?>"><a href="#">Kids</a></li>
                            <!-- <li class="<?= ($file_name == 'quran_translation.php') ? 'active' : '' ?>"><a href="movies.php"><i class='fa fa-book'></i> Movies</a></li> -->
                            <!-- <li class="<?= ($file_name == 'quran_translation.php') ? 'active' : '' ?>"><a href="movies.php"><i class='fa fa-book'></i> Cartoons</a></li> -->
                            <!--  <li class="<?= ($file_name == 'audio.php') ? 'active' : '' ?>"><a href="audio.php"><i class="fa fa-headphones"></i> <?php echo ($selected_language == "bn") ? "অডিও" : 'Audio'; ?> </a></li>
                            <li class="<?= ($file_name == 'videos.php') ? 'active' : '' ?>"><a href="video.php"><i class="fa fa-film"></i> Video</a></li>-->
                            <li class="<?= ($file_name == 'live_tv.php') ? 'active' : '' ?>"><a href="live_tv.php"><i class="fa fa-tv"></i> Live TV</a></li>
                            <li class="<?= ($file_name == 'apps.php') ? 'active' : '' ?>"><a href="apps.php"><i class="fa fa-mobile"></i> <?php echo ($selected_language == "bn") ? "মোবাইল" : 'Mobile'; ?> </a></li>
                            <!-- <li class="<?= ($file_name == 'common-questions-about-islam.php') ? 'active' : '' ?>"><a href="common-questions-about-islam.php"><i class="fas fa-question-circle" style="font-size: 17px;"></i>  <?php echo ($selected_language == "bn") ? "প্রায়শই জিজ্ঞাসা করা প্রশ্ন" : "FAQ<span style='text-transform: lowercase;'>s</span>"; ?></a></li>
                           <li class="<?= ($file_name == 'how_to_be_a_muslim.php') ? 'active' : '' ?>"><a href="how_to_be_a_muslim.php"><i class='fas fa-star-and-crescent'></i> <?php echo ($selected_language == "bn") ? "<span class='notranslate'>মুসলিম হন</span>" : 'Becoming a muslim'; ?></a></li> -->
                            <li class="<?= ($file_name == 'contact.php') ? 'active' : '' ?>"><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us </a></li>
                            <!-- <li ><a href="contact.php"><i class='fas fa-gifts'></i> <?php echo ($selected_language == "bn") ? "<span class='notranslate'>ফ্রি কুরআন</span>" : 'Get Free Quran'; ?> </a></li> -->
                            <br>
                        </ul>
                    </div>
                    <div calss="col-lg-3" style=>
                        <ul class="nav navbar-nav pull-right">
                            <!-- <li class="active"><a href="/upload.php"><img style="height: 50px;" src="img/upload_video.png" alt=""></a></li> -->
                            <li class="active"><a href="/upload.php">UPLOAD VIDEOS</a></li>
                        </ul>

                    </div>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!-- End Navbar -->
        <script>
                                $(function () {
                                    $('#ChangeToggle').click(function () {
                                        $('#navbar-hamburger').toggleClass('hidden');
                                        $('#navbar-close').toggleClass('hidden');
                                        $("#app").toggleClass('blar');
                                    });
                                });
        </script>