<style>
    footer .footer_top .item ul li {
        margin-bottom: 4px;
    }

    .faq p {
        font-size: 16px;
    }

    .faq ul li {
        font-size: 16px;
    }

    .error {
        color: #FF0000;
    }
</style>

<!-- Footer Section -->
<?php
// echo $_COOKIE[googtrans]; 

$url = $_SERVER['REQUEST_URI'];
$string = explode(".php", $url);
$lan = explode('=', $url)[1];
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameErr = $emailErr = $capchaErr = "";
    $name = $email = $capcha = $comment = "";
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }


    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["g-recaptcha-response"])) {
        $capchaErr = "Capcha is required";
    } else {
        $capcha = test_input($_POST["g-recaptcha-response"]);
    }

    if (empty($nameErr) && empty($emailErr) && empty($capchaErr)) {

        // $to = 'asad.dotphase@gmail.com';
        $to = 'mortoja@dotphase.com';
        $subject = 'Discover Quran Contact Us';
        $from = $email;

        // To send HTML mail, the Content-type header must be set
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Create email headers
        $headers .= 'From: ' . $from . "\r\n" .
                'Reply-To: ' . $from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        // Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h3 >Name: ' . $name . ', Email: ' . $email . '</h3>';
        $message .= '<p >' . $comment . '</p>';
        $message .= '</body></html>';

        // Sending email
        if (mail($to, $subject, $message, $headers)) {
            echo "<script type='text/javascript'>alert('Message sent succesfully.');</script>";
            $name = $email = $capcha = $comment = "";
        } else {
            echo "<script type='text/javascript'>alert('Unable to send email. Please try again.');</script>";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<footer>
    <style>
        #share-social .fab,
        #share-social .far {
            padding: 20px;
            font-size: 22px;
            width: 62px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        #share-social .fa:hover {
            opacity: 0.7;
        }

        #share-social .fa-facebook {
            background: #3B5998;
            color: white;
        }

        #share-social .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        #share-social .fa-google {
            background: #dd4b39;
            color: white;
        }

        #share-social .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        #share-social .fa-youtube {
            background: #bb0000;
            color: white;
        }

        #share-social .fa-instagram {
            background: #125688;
            color: white;
        }

        #share-social .fa-pinterest {
            background: #cb2027;
            color: white;
        }


        #share-social .fa-whatsapp {
            background: #25D366;
            color: white;
        }

        #share-social .fa-skype {
            background: #00aff0;
            color: white;
        }

        #share-social .fa-envelope-open {
            background: #45bbff;
            color: white;
        }

        #share-social .fa-tumblr {
            background: #2c4762;
            color: white;
        }

        @media screen and (max-width: 768px) {
            #video-footer {
                height: 300px;
            }
        }
    </style>
    <!-- Footer Last-->
    <!--    <div class="footer_last">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
    
    <?php if ($selected_language == "bn") { ?>
                                                                                
                                                                                                        <p class="copy_right_msg notranslate">কপিরাইট &copy; <?php echo date('Y'); ?> Deen Tude. সমস্ত অধিকার সংরক্ষিত
                                                                                                            বিষয়বস্তু এবং সামগ্রীর অর্থ পরিবর্তন না করেই আপনাকে দাওয়া উদ্দেশ্যে বিনা মূল্যে সামগ্রী অনুলিপি এবং বিতরণ করার অধিকার দেওয়া হলো।</p>
                                                                                                        <p style="text-align: left;" class="copy_right_msg notranslate">
                                                                                                            অস্বীকৃতি: সমস্ত ওয়েবসাইটের সামগ্রী সাধারণ তথ্য এবং শিক্ষামূলক উদ্দেশ্যে এবং সর্বজনীন ডোমেনে উপলব্ধ সমস্ত তথ্য নির্ভরযোগ্য বলে বিশ্বাসযোগ্য সুত্র থেকে আসে, এটির নিশ্চয়তা দেওয়া যায় না। এই ওয়েব সাইটে বিভিন্ন লেখক,
                                                                                                            স্পিকার, অডিও, ভিডিও, সরাসরি স্ট্রিমিং, কোনও ওয়েব লিঙ্ক এবং ফোরামের অংশগ্রহণকারীদের দ্বারা প্রকাশিত সামগ্রী, মতামত, চিন্তাভাবনা, বিশ্বাস এবং দৃষ্টিভঙ্গি প্রয়োজনীয়ভাবে বিষয়বস্তু, মতামত,
                                                                                                            বিশ্বাস এবং দৃষ্টিভঙ্গি প্রতিফলিত করে না ডিসকভার কোরআন প্রকল্প বা ডিসকভারকুরান ডট কমের কোনও পণ্য, পরিষেবা, বা সংস্থা বা ব্যক্তিদের দ্বারা দেওয়া মন্তব্যের জন্য অনুমোদনের অংশ নয়।
                                                                                                            সমস্ত বাহ্যিক লিঙ্কগুলি সুবিধার্থে এবং শুধুমাত্র তথ্যগত উদ্দেশ্যে সরবরাহ করা হয়। অভ্যন্তরীণ সাইট এবং কীওয়ার্ড অনুসন্ধান বিকল্পগুলির উন্নত করতে বাহ্যিক লিঙ্কগুলির পাঠ্য সম্পাদনা করা যেতে পারে।
                                                                                                            কোনও বাহ্যিক ওয়েবসাইট বা তার পরবর্তী লিঙ্কগুলিতে পাওয়া নির্ভুলতা, বৈধতা, বা সামগ্রীর জন্য আমরা কোনও দায়বদ্ধতা বহন করি না। আমরা আমাদের ভাষা নির্বাচন বিকল্পগুলির জন্য গুগল অনুবাদও
                                                                                                            ব্যবহার করছি। গুগল অনুবাদগুলি কম্পিউটারের সীমাবদ্ধতার কারণে সঠিকভাবে উপস্থিত নাও হতে পারে। গুগল অনুবাদ বা এটি কীভাবে প্রদর্শিত হয় তার উপর আমাদের কোনও নিয়ন্ত্রণ নেই। ভিডিও বিভাগের
                                                                                                            তারকারা উচ্চতর তারকাদের উপস্থাপনের চেয়ে ব্যবহারকারীরা রেটিং করে না যা ভিডিও দেখার পরামর্শ দেয়। সমস্ত কুরআনের উক্তি মুহসিন খান এবং অন্যান্য বিভিন্ন কুরআন অনুবাদ থেকে। আপনাকে সর্বদা
                                                                                                            নিজের গবেষণা চালানোর জন্য আমন্ত্রিত করা হয়। আপনি যদি কোনও ভুল, ত্রুটি, বা তথ্য বাদ দেওয়ার বিষয়টি চিহ্নিত করেন তবে আমাদের সাথে যোগাযোগ করুন যাতে আমরা এটি সংশোধন করতে পারি।
                                                                                
                                                                                                        </p>
                                                                                
    <?php } else { ?>
                                                                                
                                                                                                        <p class="copy_right_msg">Copyright &copy; <?php echo date('Y'); ?> Deen Tube. All Rights Reserved.
                                                                                                            You are granted the right to copy and distribute contents free of charge for DAWA purposes, without changing the contents and the meaning of the contents.</p>
                                                                                                        <p style="text-align: left;" class="copy_right_msg">
                                                                                                            DISCLAIMER: All website content is for general information and educational purposes only and available in the public domain.
                                                                                                            All information comes from sources believed to be reliable, this cannot be guaranteed. The contents, opinions, thoughts,
                                                                                                            beliefs, and viewpoints expressed by the various authors, speakers, audio, videos, live streaming, any web links, and
                                                                                                            forum participants on this web site do not necessarily reflect the contents, opinions, beliefs, and viewpoints of the
                                                                                                            Deen Tube projects or DeenTube.com. They do not constitute endorsement or approval for any products, services, or
                                                                                                            comments by organizations or individuals. All external links are provided as a convenience and for informational
                                                                                                            purposes only. External links text may be edited to improve the internal site and keyword search options. We bear
                                                                                                            no responsibility for the accuracy, legality, or content found on any external website or its subsequent links.
                                                                                                            We are also using Google Translation for our language selection options. Google translations may not appear correctly
                                                                                                            due to computer limitations. We do not have any control over Google Translation or how it is displayed. The video
                                                                                                            section stars are not ratings by the users rather than higher stars represent which video recommends to watch.
                                                                                                            You are invited to always conduct your own research. If you spot any mistake, error, or omission of information,
                                                                                                            contact us so we can correct it.
                                                                                                        </p>
                                                                                
    <?php } ?>
    
    
                    </div>
                </div>
            </div>
        </div> End Footer Last-->

    <!-- Footer Apps-->
    <!--    <div class="footer_last">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12" style="padding-bottom: 10px;">
                        <hr />
                        <p style="font-size: 14px; color: white;font-weight: 400;" class="text-center">Download the Mobile App - Quran Translations and Tafsir</p>
                        <span id="footerp2">
                            <CENTER>
    
                                <a href="https://play.google.com/store/apps/details?id=com.greentech.quran" target="_blank">
                                    <img src="images/google.png" alt="Available on the Play Store" title="Available on the Play Store"></a>&nbsp;&nbsp;
                                <a href="https://books.apple.com/us/book/quran-in-english-modern-english-translation-clear-easy/id909911371" target="_blank">
    
                                    <img src="images/iphone.png" alt="Available on the Play Store" title="Available on the Play Store"></a>&nbsp;&nbsp;
                                <a href="https://www.amazon.com/AL-Quran-Tafsir-by-Word/dp/B07NV9XVH5/ref=sr_1_4?dchild=1&keywords=Quran&qid=1602976399&s=mobile-apps&sr=1-4" target="_blank">
                                    <img src="images/amazon.png" alt="Available on the Play Store" title="Available on the Play Store"></a>&nbsp;&nbsp;
                                <a href="https://books.apple.com/us/book/quran-in-english-modern-english-translation-clear-easy/id909911371" target="_blank">
                                    <img src="images/itunes.png" alt="Available on the Play Store" title="Available on the Play Store"></a>
    
    
                    </div>
                    <br>
    
                </div>
            </div>
        </div> End Footer Apps-->




    <!-- Back to Top Button -->
    <span id="top-link-block" class="affix-top">
        <a href="‪#‎top‬" class="well well-sm btn default_btn" onclick="jQuery('html,body').animate({scrollTop: 0}, 'slow');
                return false;">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </span><!-- End back to top -->
</footer>

<!-- Bootstrap Modal for play youtube video -->
<!--<div id="video_modal" class="modal fade video_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div id="iframe_video" class="iframe_video">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background-color: blue; color: white; font-weight: bold;" data-dismiss="modal" id="pause">Close</button>
            </div>
        </div> /.modal-content 
    </div> /.modal-dialog 
</div> /.modal -->


<!-- Video Modal -->
<!--<div class="modal fade video_modal" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="video_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="video_frame"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> End video modal -->


<!-- Iframe Modal -->
<div class="modal fade translator_modal" id="translator_modal" tabindex="-1" role="dialog" aria-labelledby="translator_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Translate Quran</h4>
            </div>
            <div class="modal-body">
                <div class="translator_iframe">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- End video modal -->



<?php
if (!isset($_COOKIE['language_modal'])) {
    echo "<script>
var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
setTimeout(function(){ 
    if(width > 1200 ) {
        $('#question_modal').modal('show');
    }else{
          
    }
}, 5000);
</script>";
}
?>


<!-- Bootstrap Core JS -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Bootstrap Dropdown Select -->
<script src="bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- JS for Core Waypoint -->
<script src="js/waypoints.min.js"></script>

<!-- JS for Audio Player -->
<script src="js/mediaelement-and-player.min.js"></script>

<!-- JS for Bootstrap Datables -->
<script type="text/javascript" charset="utf8" src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
            function loadMore()
            {
                console.log("More loaded");
                $('#loadingbar').css("display", "block");
                $.ajax({
                    url: "load_more.php",
                    type: 'post',
                    data: {start: 0, rowperpage: 10},
                    success: function (response) {
//                        $("#load_more_content").after(response).show().fadeIn("slow");
                         $("#load_more_content").append(response);
                        $('#loadingbar').css("display", "none");
                    }
                });
                $(window).bind('scroll', bindScroll);
            }
            function bindScroll() {
                if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
                    $(window).unbind('scroll');
                    loadMore();
                }
            }
            $(window).scroll(bindScroll);

            $(document).mouseup(function (e) {
                var container = $("#language-list-panel1");
                // if the target of the click isn't the container nor a descendant of the container
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.hide();
                }
            });

            $('.panel-collapse').on('shown.bs.collapse', function (e) {
                var panel = $(this).closest('.panel');
                $('html,body').animate({
                    scrollTop: panel.offset().top - 10
                }, 500);
            });

            $(document).ready(function () {
                $("#itemX").addClass("active");
                $(".prev").click(function () {
                    // do previous tab
                    var $el = $(".active").prev(".itemWrap");
                    if ($el.length) {
                        $(".itemWrap").each(function () {
                            $(this).removeClass("active");
                        });
                        $el.addClass("active");
                    }
                });

                $(".next").click(function () {
                    var $el = $(".active").next(".itemWrap");
                    if ($el.length) {
                        $(".itemWrap").each(function () {
                            $(this).removeClass("active");
                        });
                        $el.addClass("active");
                    }
                });


                $("#itemX1").addClass("active1");
                $(".prev1").click(function () {
                    var $el = $(".active1").prev(".itemWrap1");
                    if ($el.length) {
                        $(".itemWrap1").each(function () {
                            $(this).removeClass("active1");
                        });
                        $el.addClass("active1");
                    }

                });

                $(".next1").click(function () {
                    var $el = $(".active1").next(".itemWrap1");
                    if ($el.length) {
                        $(".itemWrap1").each(function () {
                            $(this).removeClass("active1");
                        });
                        $el.addClass("active1");
                    }
                });
            });
            $(document).ready(function () {
                var lan1 = $('input[name="selected_language"]:checked').attr('id');
                $("#lan").text(lan1);
                $("input[name='selected_language']").change(function () {
                    $("#language-list-panel1").slideToggle();
                    var lan = $(this).parent().text();
                    $("#lan").text(lan);

                });

                /*========== Code for select religion automatically ==========*/
                // $(window).on('load',function(){
                //     $('#question_modal').modal('show');
                // });


                $("#language-list-btn").click(function () {
                    $("#language-list-panel").slideToggle();

                });

                $("#language-list-btn1").click(function () {
                    $("#language-list-panel1").slideToggle();

                });

                // $("input[@name='selected_language']").change(function(){
                //         // Do something interesting here
                //         alert();
                //     });


                /*========== Code for waypoint ==========*/
                $('.sj').waypoint(function () {
                    var anim = $(this).attr('data-animate'),
                            del = $(this).attr('data-animation-delay');
                    dur = $(this).attr('data-animation-duration');
                    $(this).addClass('animated ' + anim).css({
                        animationDelay: del + 'ms',
                        animationDuration: dur + 'ms'
                    });
                }, {
                    offset: '100%',
                    triggerOnce: true
                });


                /*===== Code for Mobile Menu =====*/
                $('.navbar-toggle').click(function () {
                    $(this).toggleClass('collapsed');
                    $('body').toggleClass('menu_opened');
                })

                /*========== Bootstrap Dropdown menu on hover ==========*/
                $('.navbar .navbar-nav li.dropdown').mouseover(function () {
                    $(this).addClass('open');
                    $(this).click(function () {
                        $(this).toggleClass('open');
                    });
                });
                $('.navbar .navbar-nav li.dropdown').mouseout(function () {
                    $(this).removeClass('open');
                });

                /*========== Back to top button ==========*/
                if ((jQuery(window).height() + 100) < jQuery(document).height()) {
                    jQuery('#top-link-block').removeClass('hidden').affix({
                        offset: {
                            top: 100
                        }
                    });
                }

                /*========= Bootstrap Dropdown Select ==========*/
                $('.selectpicker').selectpicker();

                /*========== HTML 5 Audio Player =========*/
                $('audio').mediaelementplayer();

                /****************Youtube Video Pause**************************/

                $('#pause').on('click', function () {
                    $("#youtube_iframe")[0].src += "?autoplay=0";

                    function stop() {
                        var iframe = document.getElementById('youtube_iframe');
                        iframe.src = iframe.src;
                    }
                    stop();
                });
                $('.close').on('click', function () {
                    $("#youtube_iframe")[0].src += "?autoplay=0";

                    function stop() {
                        var iframe = document.getElementById('youtube_iframe');
                        iframe.src = iframe.src;
                    }
                    stop();

                });

                /***********************Click for autoplay options*************************************/


                /*========== Bootstrap Modal ==========*/
//                $('.click_for_video').click(function () {
//                    console.log('here');
//                    var video_url = $(this).attr('data-url');
//                    $('#default_video').remove();
//                    $('.video_play').html('<iframe allow="autoplay" id="youtube_iframe" width="100%" height="400" src="https://www.youtube.com/embed/' + video_url + '" frameborder="0" allowfullscreen></iframe>');
//                    $("#youtube_iframe")[0].src += "?autoplay=1";
//                });


                /*========== Bootstrap Modal ==========*/
//                $('.click_for_modal').click(function () {
//                    console.log('here2');
//                    var video_url = $(this).attr('data-url');
//                    var title = $(this).children().children('h3').text();
//                    if (title.length == 0) {
//                        var title = $(this).find('.video_title').text();
//                    }
//                    $('.video_modal .iframe_video').html('<iframe allow="autoplay" id="youtube_iframe" width="100%" height="400" src="https://www.youtube.com/embed/' + video_url + '" frameborder="0" allowfullscreen></iframe>');
//                    $('.video_modal .modal-header h4').text(title);
//
//                    $("#youtube_iframe")[0].src += "?autoplay=1";
//                });

                /*========== Translate Online Button ==========*/
                $('.translate_online_btn').click(function () {
                    $('.translator_iframe').html('<iframe src="https://www.quranexplorer.com/quran/" frameborder="0"></iframe>');
                });

                /*========== Bootstrap Datables =========*/
                $('#audio_en_table, #audio_sp_table').DataTable({
                    "aaSorting": [],
                    "bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": true,
                    "bInfo": false,
                    "bAutoWidth": false
                });
            });

            console.log(window.innerWidth)
            var width = $(window).width();
            console.log(width)
</script>
</body>

</html>