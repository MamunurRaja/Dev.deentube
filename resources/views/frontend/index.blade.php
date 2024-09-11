
@include('frontend.header');
@include('frontend.all_video_array');

<?php
// include('header.php');
// include('all_video_array.php');
$video_store = new all_videos();
?>

<style type="text/css">
    .container-fluid {
        padding-right: 8px;
        padding-left: 8px;
        margin-right: auto;
        margin-left: auto;
    }
    /*    .row {
             max-width: 75rem; 
            margin-left: auto;
            margin-right: auto;
        }*/
    .fa-star {
        font-size: 8px !important;
    }

    .popular-videos img, .click_for_modal img {
        width: 102%;
        height: 202px;
    }

    .bb {
        border-right: 1px solid black;
        padding: 0;
    }

    .mt25 {
        margin-top: 25px;
        padding-left: 10px;
        padding-right: 12px;
    }

    .main_navbar .navbar-nav>li>a {
        padding: 15px 17px;
        font-size: 14px;
    }

    .on {
        display: none !important;
    }

    .off {
        display: block !important;
    }

    #freequran {
        height: 214px;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .playlist {
        background: white;

    }

    .modal .modal-dialog .modal-header {
        margin-top: 17px;
    }

    .playlist-img {
        padding: 2px;
    }

    .playlist-text {
        padding: 0 5px;
    }

    .playlist-text h4 {
        font-size: 14px;
        color: #3c3a3a;
        font-weight: bold;
        /*padding: 5px;*/

    }

    .default-video {
        height: 406px;
    }

    .playlist-text p {
        font-size: 11px;
        color: #3c3a3a;
        line-height: 1.5;
    }

    .playlist-img img {
        width: 100%;
        height: 98px;
        padding: 4px;
    }

    .video-player {
        padding: 0;
    }

    .popular-videos {
        margin-top: 20px;
    }

    .popular-videos h1 {
        font-size: 25px;
        text-transform: uppercase;
        font-family: sans-serif;

    }

    .click_for_video {
        border-bottom: 1px solid black;
    }

    .checked {
        color: orange;
    }

    .title {
        font-size: 12px;
        /* height: 25px; */
        height: 10px;
        padding-right: 18px;
        padding-left: 10px;
    }

    .fa-star {
        font-size: 10px;
    }

    .video-category h2 {
        font-size: 25px;
        text-transform: uppercase;
        font-family: sans-serif;
        margin-bottom: 0;
        padding: 10px;
        background: #404040;
        color: #dacaca;
        font-size: 17px;

    }

    .main-video-height {
        inline-height: 63px !important;
    }

    @media screen and (min-width: 1200px) {
        #see {
            color: blue;
            position: absolute;
            top: -18px;
            right: 16px;
        }

        .playlist-area {
            height: 414px;

        }

        .no {
            display: block;
        }

        .yes {
            display: none;
        }

    }

    @media screen and (max-width: 1200px) {

        #see {
            color: blue;
            position: absolute;
            top: -30px;
            right: 16px;
        }

        .no {
            display: none;
        }

        .yes {
            display: block;
        }

        #freequran {
            height: 408px;
        }

    }

    @media screen and (max-width: 991px) {

        .bb {
            height: 128px;
        }
    }

    @media screen and (max-width: 768px) {
        #see {
            color: blue;
            position: absolute;
            top: -44px;
            right: 16px;
        }

        .bb {
            height: 127px;
        }

        #freequran {
            height: 300px;
        }

        .mt25 {
            margin-top: 10px;
        }
    }

    @media screen and (max-width: 991px) and (min-width: 768px) {
        .off {
            display: none !important;
        }

        .on {
            display: block !important;
        }
    }

    @media screen and (max-width: 767px) and (min-width: 481px) {
        #see {
            color: blue;
            position: absolute;
            top: -44px;
            right: 16px;
        }

        /*        .click_for_modal a img {
                    height: 150px !important;
                }*/

        #freequran {
            height: 300px;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        .col-xs-6 {
            width: 50% !important;
            display: block;
            float: left;
            margin: 0 auto;
        }

        .main_navbar .navbar-nav>li>a {
            padding: 15px 17px;
            font-size: 14px;
        }
    }

    @media screen and (max-width: 600px) {
        #see {
            color: blue;
            position: absolute;
            top: -21px;
            right: 16px;
        }

        .bb {
            height: 130px;
        }
    }

    @media screen and (max-width: 540px) {
        .bb {
            height: 140px;
        }
    }

    @media screen and (max-width: 412px) {
        .bb {
            height: 133px;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        .playlist-img img {
            width: 100%;
            height: 87px;
            padding: 4px;
        }
    }

    @media only screen and (-webkit-min-device-pixel-ratio: 2.625),
    only screen and (min--moz-device-pixel-ratio: 2.625),
    only screen and (-o-min-device-pixel-ratio: 2.625/1),
    only screen and (min-device-pixel-ratio: 2.625){
        .bb {
            height: 133px;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        .playlist-img img {
            width: 100%;
            height: 87px;
            padding: 4px;
        }
    }


    @media screen and (max-width: 384px) {
        .bb {
            height: 141px;
        }
    }

    @media screen and (max-width: 375px) {
        .bb {
            height: 120px;
        }

        .playlist-text p {
            font-size: 10px;
            color: #3c3a3a;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        #freequran {
            height: 250px;
        }

        .playlist-img img {
            width: 100%;
            height: 79px;
        }

        .title {
            font-size: 12px;
            height: 20px;
        }
    }

    @media screen and (max-width: 360px) {

        .bb {
            padding: 0;
            height: 107px;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        .playlist-img img {
            width: 100%;
            height: 67px;
        }
    }

    @media screen and (max-width: 320px) {

        .fa-star {
            font-size: 6px !important;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        #freequran {
            height: 196px;
        }
    }

    @media screen and (max-width: 800px) {

        .fa-star {
            font-size: 6px !important;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        #freequran {
            height: 196px;
        }
    }

    @media screen and (max-width: 678px) {

        .fa-star {
            font-size: 6px !important;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        #freequran {
            height: 196px;
        }
    }

    @media screen and (max-width: 927px) {

        .fa-star {
            font-size: 6px !important;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        #freequran {
            height: 196px;
        }
    }

    @media screen and (max-width: 280px) {
        .mt25 {
            margin-top: 0px;
        }

        .fa-star {
            font-size: 4px !important;
        }

        .playlist-img img {
            height: 52px;
        }

        .title {
            font-size: 10px;
        }
    }

    @media screen and (max-width: 240px) {
        .playlist-img img {
            height: 46px;
        }

        .popular-videos img, .click_for_modal img {
            width: 100%;
            height: 240px;
        }

        .bb {
            height: 114px;
        }

        .table tr td {
            padding: 0px !important;
        }
    </style>

    <!-- BreadCrumb -->
    <section class="breadcrumb_cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>
        </div>
    </section><!-- End breadcrumb-->

    <main role="main">
        <div class="container-fluid" style="padding-left: 20px; padding-right: 20px;">
            <div style="border: 5px solid #B6B4B5;" class="row">
                <div style="background: #000;" class="col-lg-8 video-player main-video-height">
                    <div class="video_play"></div>
                    <div id="default_video">
                        <?php /*
                        /* <!--<iframe width="713" height="401" src="https://www.youtube.com/embed/rTQBjXWVYSg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--> */
                        /* <iframe width="100%" height="400" src="https://www.youtube.com/embed/3bSksfUP5fE?autoplay=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> */
                         ?>
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/dg1hRBrNK8I?autoplay=1&enablejsapi=1" title="Crowd shouts "USA! USA!" after apparent assassination attempt on Trump" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <?php
                $list_of_main_side_videos = $video_store->list_of_main_side_videos();
                $unknown_list_videos = $video_store->unknown_list_videos();
                ?>
                <div class="col-lg-4 playlist-area no">
                    <?php
                    foreach ($list_of_main_side_videos as $videos) {
                        $targetVideo = "single_video.php?u=" . $videos['video_id'];
                        ?>
                        <div class="row playlist click_for_video" data-url="<?php echo $videos['video_id'] ?>">
                            <a href="<?php echo $targetVideo ?>">
                                <div class="col-xs-4 col-md-4 col-sm-12 playlist-img">
                                    <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hqdefault.jpg">
                                </div>
                                <div class="col-xs-8 col-md-8 col-sm-12 playlist-text">
                                    <?php
                                    $text = strip_tags($videos['video_title']);
                                    $summary = substr(strip_tags($text), 0, 55);
                                    $pos = strrpos($summary, " ");
                                    $text = substr($summary, 0, $pos) . '...';
                                    ?>
                                    <h4><?php echo $text . $videos['video_time']; ?></h4>
                                    <p><?php echo $videos['video_views'] ?> Views, <?php echo $videos['time_ago']; ?></p>
                                    <p>From Admin</p>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="col-lg-4 playlist-area yes">
                    <div class="row">
                        <?php
                        foreach ($unknown_list_videos as $videos) {
                            ?>
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-3 playlist click_for_video text-center bb" data-url="<?php echo $videos['video_id'] ?>">
                                <a href="javascript:void(0)">
                                    <div class="col-xs-12 col-md-12 col-sm-12 playlist-img">
                                        <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hqdefault.jpg">
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-sm-12 playlist-text">
                                        <p><?php echo $videos['video_title'] ?></p>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row"></div>
            <?php $latest_videos = $video_store->latest_videos(); ?>

            <div class="row">
                <div class="col-lg-8">
                    <div class="popular-videos">
                        <h1 style="text-transform: uppercase;font-weight: 600;margin-bottom: 20px;margin-top: 20px;">LATEST VIDEOS</h1>
                        <hr style="border: 3px solid lightgray;margin-bottom: 20px;">
                        <div class="row">
                            <?php
                            foreach ($latest_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-4 click_for_modal" style="margin-top: 12px;" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg" style="width: 106%;">
                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row" style="margin-left: -20px; margin-right: 0px;">
                                            <div class="col-xs-6 col-md-6 col-sm-6" style="margin-left: 6px;">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++)
                                                    echo '<span class="fa fa-star checked"></span>';
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="margin-bottom: 10px;" class="video-category no">
                        <h2>Sponsor Ad</h2>
                        <a title="Free Quran" href="https://discoverquran.com/contact">
                            <img id="freequran" style="width: 100%;" src="images/free_quran_mini_2.jpg" class="img-responsive" alt="free quran">
                        </a>
                    </div>
                    <div style="margin-bottom: 10px;" class="video-category no">
                        <h2>VIDEOS CATEGORY</h2>

                        <table class="table table-sm" style="text-align:left">
                            <tr>
                                <td style="padding:1px !important;">
                                    <ul style="list-style-type:disc;">
                                        <li style="padding:0px !important;">Islamic Movies</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:1px !important;">
                                    <ul style="list-style-type:disc;">
                                        <li>General Movies</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:1px !important;">
                                    <ul style="list-style-type:disc;">
                                        <li>Lecture/Speeches</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:1px !important;">

                                    <ul style="list-style-type:disc;">
                                        <li>Interviews</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:1px !important;">

                                    <ul style="list-style-type:disc;">
                                        <li>News & Info</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:1px !important;">
                                    <ul style="list-style-type:disc;">
                                        <li>Kids</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:1px !important;">
                                    <ul style="list-style-type:disc;">
                                        <li>Documentary</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:1px !important;">

                                    <ul style="list-style-type:disc;">
                                        <li>Travel</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:1px !important;">
                                    <ul style="list-style-type:disc;">
                                        <li>Cooking</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:1px !important;">
                                    <ul style="list-style-type:disc;">
                                        <li>Islamic Music</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:1px !important;">

                                    <ul>
                                        <li style="list-style-type:disc;">Religious</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:1px !important;">

                                    <ul>
                                        <li style="list-style-type:disc;">Gaza</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:1px !important;">

                                    <ul>
                                        <li style="list-style-type:disc;">Palestine</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div style="margin-bottom: 30px;" class="video-category yes">
                        <h2>Get Free Quran</h2>
                        <a title="Free Quran" href="https://discoverquran.com/contact">
                            <img id="freequran" style="width: 100%;" src="images/free_quran_mini_2.jpg" class="img-responsive" alt="free quran">
                        </a>
                    </div>
                </div>
            </div>
            <!-- ::::::::::::::Popular Videos Starts::::::::::::::::::::::::::::::::::::::: -->
            <div class="row">
                <div style="margin-top: -20px;" class="col-lg-12">
                    <div style="margin-top: 0px;" class="popular-videos">

                        <h1 style="text-transform: uppercase;font-weight: 600;margin-bottom: 20px;margin-top: 40px;">POPULAR VIDEOS</h1>

                        <hr style="border: 3px solid lightgray;margin-bottom: 20px;">
                        <div style="margin-top: 40px;margin-bottom: 20px;" class="row">

                            <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="p30N7tOJ64g" data-toggle="modal" data-target="#video_modal">
                                <a href="single_video.php?u=p30N7tOJ64g">
                                    <!--<img style="width: 100%; height: 150px;" src="images/youtube_thumbs/thumb_4.jpg">-->
                                    <img src="https://i3.ytimg.com/vi/p30N7tOJ64g/hq720.jpg">
                                    <h4 class="title" title="Donald Trump is 'safe' after shots fired at rally - US Secret Service">
                                        <b>
                                            <?php
                                            $text = strip_tags("Donald Trump is 'safe' after shots fired at rally - US Secret Service");
                                            $summary = substr(strip_tags($text), 0, 55);
                                            $pos = strrpos($summary, " ");
                                            $text = substr($summary, 0, $pos) . '...';
                                            echo $text . ' (04.13 minuits)';
//                                            echo $videos['video_title']
                                            ?>
                                        </b>
                                    </h4>
                                    <div class="row" style="margin-left: -20px; margin-right: 0px;">
                                        <div class="col-xs-6 col-md-6 col-sm-6">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                            <p class="title">Views: 3M</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="Sut9pcNvTUs" data-toggle="modal" data-target="#video_modal">
                                <a href="single_video.php?u=Sut9pcNvTUs">
                                    <img src="https://i3.ytimg.com/vi/Sut9pcNvTUs/hq720.jpg">
                                    <h4 class="title" title="<?php echo 'Attacker at Donald Trump’s rally killed by US Secret Service sniper | BBC News' ?>">
                                        <b>
                                            <?php
                                            $text = strip_tags('Attacker at Donald Trump’s rally killed by US Secret Service sniper | BBC News');
                                            $summary = substr(strip_tags($text), 0, 55);
                                            $pos = strrpos($summary, " ");
                                            $text = substr($summary, 0, $pos) . '...';
                                            echo $text . ' (15.53 minuits)';
                                            ?>
                                        </b>
                                    </h4>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 col-sm-6">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                            <p class="title">Views: 5M</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="yrn5rj0OHc4" data-toggle="modal" data-target="#video_modal">
                                <a href="single_video.php?u=yrn5rj0OHc4">
                                    <img src="https://i3.ytimg.com/vi/yrn5rj0OHc4/hq720.jpg">
                                    <!--<img style="width: 100%; height: 150px;" src="images/youtube_thumbs/image-come-to-islam.png">-->
                                    <!--<h4 class="title">The Purpose of Life (1.31.05 hours)</h4>-->
                                    <h4 class="title" title="<?php echo 'The Purpose of Life ' ?>">
                                        <b>
                                            <?php
                                            $text = strip_tags('The Purpose of Life');
                                            $summary = substr(strip_tags($text), 0, 55);
                                            $pos = strrpos($summary, " ");
                                            $text = substr($summary, 0, $pos) . '...';
                                            echo $text . ' (1.31.05 hours)';
                                            ?>
                                        </b>
                                    </h4>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 col-sm-6">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                            <p class="title">Views: 760k</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                   <div class="col-xs-12 col-md-3 col-sm-12 col-lg-3 click_for_modal" data-url="dimidkpcBQs" data-toggle="modal" data-target="#video_modal">
                                                        <a href="single_video.php?u=dimidkpcBQs">
                                                            <img src="https://i3.ytimg.com/vi/dimidkpcBQs/hq720.jpg">
                                                            <h4 class="title">How I came to Islam (24.21 minuits)</h4>
                                                            <h4 class="title" title="<?php //echo 'How I came to Islam'        ?>">
                                                                <b>
                            <?php
                                       $text = strip_tags('How I came to Islam');
                                       $summary = substr(strip_tags($text), 0, 55);
                                       $pos = strrpos($summary, " ");
                                       $text = substr($summary, 0, $pos) . '...';
                                       echo $text . ' (24.21 minuits)';
                            ?>
                                                                </b>
                                                            </h4>
                                                            <div class="row">
                                                                <div class="col-xs-6 col-md-6 col-sm-6">
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                </div>
                                                                <div style="padding: 0;" class="col-xs-6 col-md-6 col-sm-6">
                                                                    <p class="title">Views: 591k</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ::::::::::::::Popular Videos Ends::::::::::::::::::::::::::::::::::::::: -->
            <div class="row">
                <?php $featured_videos = $video_store->featured_videos(); ?>
                <div style="margin-top: -20px;" class="col-lg-12">
                    <div style="margin-top: 0px;" class="popular-videos">
                        <h1 style="text-transform: uppercase;font-weight: 600;margin-bottom: 20px;margin-top: 40px;">FEATURED VIDEOS</h1>
                        <hr style="border: 3px solid lightgray;margin-bottom: 20px;">
                        <div style="margin-top: 40px;margin-bottom: 20px;" class="row">
                            <?php
                            foreach ($featured_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <?php
                                        if (empty($videos['video_image'])) {
                                            ?>
                                            <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg">
                                        <?php } else { ?>
                                            <img src="<?php echo $videos['video_image'] ?>">
                                        <?php }
                                        ?>

                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
//                                            echo $videos['video_title']
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row mt25">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++) {
                                                    echo '<span class="fa fa-star checked"></span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                $health_and_fitness_videos = $video_store->health_and_fitness_videos();
                $eternal_life_videos = $video_store->eternal_life_videos();
                $stories_of_prophets_videos = $video_store->stories_of_prophets_videos();
                $life_story_of_prophet_videos = $video_store->life_story_of_prophet_videos();
                $life_the_barzakh_prophet_videos = $video_store->life_the_barzakh_prophet_videos();
                $day_of_judgement_videos = $video_store->day_of_judgement_videos();
                $racism_in_islam_videos = $video_store->racism_in_islam_videos();
                ?>
                <div style="margin-top: -20px;" class="col-lg-12">
                    <div style="margin-top: 0px;" class="popular-videos">
                        <br><br>
                        <h1 style="text-transform: uppercase;font-weight: 600;margin-bottom: -10px;">Health and Fitness</h1>
                        <hr style="border: 3px solid lightgray;margin-bottom: 20px;">
                        <div style="margin-top: 20px;margin-bottom: 20px;" class="row">
                            <?php
                            foreach ($health_and_fitness_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <?php
                                        if (empty($videos['video_image'])) {
                                            ?>
                                            <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg">
                                        <?php } else { ?>
                                            <img src="<?php echo $videos['video_image'] ?>">
                                        <?php }
                                        ?>

                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
//                                            echo $videos['video_title']
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row mt25">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++) {
                                                    echo '<span class="fa fa-star checked"></span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                        <br>
                        <h1 style="text-transform: uppercase;font-weight: 600;margin-bottom: -10px;margin-top: 5px;">THE STORIES OF THE PROPHETS</h1>
                        <hr style="border: 3px solid lightgray;margin-bottom: 20px;">
                        <div style="margin-top: 20px;margin-bottom: 20px;" class="row">
                            <?php
                            foreach ($stories_of_prophets_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <?php
                                        if (empty($videos['video_image'])) {
                                            ?>
                                            <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg">
                                        <?php } else { ?>
                                            <img src="<?php echo $videos['video_image'] ?>">
                                        <?php }
                                        ?>

                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
//                                            echo $videos['video_title']
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row mt25">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++) {
                                                    echo '<span class="fa fa-star checked"></span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                        <br>
                        <h1 style="text-transform: uppercase;font-weight: 600;margin-bottom: -10px;margin-top: 5px;">Eternal Life or Hereafter</h1>
                        <hr style="border: 3px solid lightgray;margin-bottom: 20px;">
                        <div style="margin-top: 20px;margin-bottom: 20px;" class="row">
                            <?php
                            foreach ($eternal_life_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <?php
                                        if (empty($videos['video_image'])) {
                                            ?>
                                            <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg">
                                        <?php } else { ?>
                                            <img src="<?php echo $videos['video_image'] ?>">
                                        <?php }
                                        ?>

                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
//                                            echo $videos['video_title']
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row mt25">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++) {
                                                    echo '<span class="fa fa-star checked"></span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                        <!-- :::::::::::::::Mohammad Life Starts::::::::::::::::::::::::: -->
                        <h4 style="margin-bottom: 20px;text-transform: uppercase;font-weight: 600;font-size: 24px;margin-top: 40px;">LIFE STORY OF PROPHET MUHAMMAD (PBUH)</h4>

                        <hr style="border: 1px solid lightgray;margin-bottom: 10px;">
                        <div style="margin-top: 20px;margin-bottom: 20px;" class="row">
                            <?php
                            foreach ($life_story_of_prophet_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <?php
                                        if (empty($videos['video_image'])) {
                                            ?>
                                            <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg">
                                        <?php } else { ?>
                                            <img src="<?php echo $videos['video_image'] ?>">
                                        <?php }
                                        ?>

                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
//                                            echo $videos['video_title']
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row mt25">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++) {
                                                    echo '<span class="fa fa-star checked"></span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>

                        </div>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <p style="font-size: 16px; color: #0000FF;"><a target="_blank" style="" id="see" href="https://www.youtube.com/watch?v=YaO-FO3WdSA&list=PLQrtuIuKthvRv_tB1Ds7Rm-pfpOAGPFqF">See All Videos >></a></p>
                            </div>
                        </div>
                        <br>

                        <!-- :::::::::::::::Mohammad Life Ends::::::::::::::::::::::::: -->

                        <h4 style="margin-bottom: 20px;text-transform: uppercase;font-weight: 600;font-size: 24px;margin-top: -8px;">The Life in The Barzakh</h4>
                        <hr style="border: 1px solid lightgray;margin-bottom: 10px;">
                        <div style="margin-top: 20px;margin-bottom: 20px;" class="row">
                            <?php
                            foreach ($life_the_barzakh_prophet_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <?php
                                        if (empty($videos['video_image'])) {
                                            ?>
                                            <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg">
                                        <?php } else { ?>
                                            <img src="<?php echo $videos['video_image'] ?>">
                                        <?php }
                                        ?>

                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
//                                            echo $videos['video_title']
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row mt25">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++) {
                                                    echo '<span class="fa fa-star checked"></span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <p style="font-size: 16px; color: #0000FF;"><a href="https://www.youtube.com/watch?v=kXX5MPMd_mc&list=PLYZxc42QNctVw0HhfP7N02hNlScC-3UhN" style="" id="see">See All Videos >></a></p>
                            </div>
                        </div>
                        <br>

                        <h4 style="margin-bottom: 20px;text-transform: uppercase;font-weight: 600; font-size: 24px;margin-top: 0px;">Day of Judgement</h4>
                        <hr style="border: 1px solid lightgray;margin-bottom: 10px;">
                        <div style="margin-top: 20px;margin-bottom: 20px;" class="row">
                            <?php
                            foreach ($day_of_judgement_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <?php
                                        if (empty($videos['video_image'])) {
                                            ?>
                                            <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg">
                                        <?php } else { ?>
                                            <img src="<?php echo $videos['video_image'] ?>">
                                        <?php }
                                        ?>

                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
//                                            echo $videos['video_title']
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row mt25">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++) {
                                                    echo '<span class="fa fa-star checked"></span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <!--<p style="font-size: 16px; color: #0000FF;"><a href="/all-videos.php?title=day-of-judgement" id="see" style="" href="#">See All Videos >></a></p>-->
                                <p style="font-size: 16px; color: #0000FF;"><a href="#" id="see" style="" href="#">See All Videos >></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div style="margin-top: 0px;" class="popular-videos">
                        <br>
                        <h1 style="margin-bottom: 20px;text-transform: uppercase;font-weight: 600;font-size: 24px;margin-top: -8px;">Racism in Islam</h1>

                        <hr style="border: 3px solid lightgray;margin-bottom: 20px;">
                        <div style="margin-top: 20px;margin-bottom: 20px;" class="row">
                            <?php
                            foreach ($racism_in_islam_videos as $videos) {
                                $targetVideo = "single_video.php?u=" . $videos['video_id'];
                                ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-3 click_for_modal" data-url="<?php echo $videos['video_id'] ?>" data-toggle="modal" data-target="#video_modal">
                                    <a href="<?php echo $targetVideo ?>">
                                        <?php
                                        if (empty($videos['video_image'])) {
                                            ?>
                                            <img src="https://i3.ytimg.com/vi/<?php echo $videos['video_id'] ?>/hq720.jpg">
                                        <?php } else { ?>
                                            <img src="<?php echo $videos['video_image'] ?>">
                                        <?php }
                                        ?>

                                        <h4 class="title" title="<?php echo $videos['video_title'] ?>">
                                            <b>
                                                <?php
                                                $text = strip_tags($videos['video_title']);
                                                $summary = substr(strip_tags($text), 0, 55);
                                                $pos = strrpos($summary, " ");
                                                $text = substr($summary, 0, $pos) . '...';
                                                echo $text . $videos['video_time'];
//                                            echo $videos['video_title']
                                                ?>
                                            </b>
                                        </h4>
                                        <div class="row mt25">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <?php
                                                for ($i = 0; $i < $videos['video_star']; $i++) {
                                                    echo '<span class="fa fa-star checked"></span>';
                                                }
                                                ?>
                                            </div>
                                            <div style="padding: 0px;text-align: right;" class="col-xs-6 col-md-6 col-sm-6">
                                                <p class="title">Views: <?php echo $videos['video_views'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 20px;" class="row">
                <div class="col-lg-12">
                    <div class="popular-videos">
                        <h1 style="text-transform: uppercase;font-weight: 600;margin-bottom: 20px;">LATEST VIDEOS</h1>
                        <hr style="border: 3px solid lightgray;margin-bottom: 20px;">
                        <div class="row" id="load_more_content">
                            <div id="loadingbar">
                                <img src="images/loading-dots.gif" style="height: 80px; text-align: center; margin-left: 500px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- /.container -->
    <?php
    include('footer.php');
    ?>