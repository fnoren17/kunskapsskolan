@extends("layouts/master")

@section("pageheader")
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!--[if lt IE 9]>
    <script src="http://dellstad.se/wp-content/themes/Divi/js/html5.js" type="text/javascript"></script>
    <![endif]-->


    <script type="text/javascript">
		document.documentElement.className = 'js';
    </script>

    <title>LOGGBOKEN</title>
    <!-- Speed of this site is optimised by WP Performance Score Booster plugin v1.7.2 - https://dipakgajjar.com/wp-performance-score-booster/ -->
    <script type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/dellstad.se\/wp-includes\/js\/wp-emoji-release.min.js"}};
		!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <meta content="Divi v.3.0.51" name="generator"/>

    <link rel ='stylesheet' href="{{ asset('css/styling.css') }}">

    <link rel='stylesheet' id='divi-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&#038;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='et-gf-playfair-display-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900italic,900&#038;subset=latin,latin-ext,cyrillic' type='text/css' media='all' />
    <link rel='stylesheet' id='divi-style-css'  href='http://dellstad.se/wp-content/themes/Divi/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='et-shortcodes-css-css'  href='http://dellstad.se/wp-content/themes/Divi/epanel/shortcodes/css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' id='et-shortcodes-responsive-css-css'  href='http://dellstad.se/wp-content/themes/Divi/epanel/shortcodes/css/shortcodes_responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'  href='http://dellstad.se/wp-content/themes/Divi/includes/builder/styles/magnific_popup.css' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css'  href='http://dellstad.se/wp-includes/css/dashicons.min.css' type='text/css' media='all' />
    <script type='text/javascript' src='http://dellstad.se/wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='http://dellstad.se/wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <link rel='https://api.w.org/' href='http://dellstad.se/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://dellstad.se/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://dellstad.se/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.9.8" />
    <link rel="canonical" href="http://dellstad.se/motivactr/" />
    <link rel='shortlink' href='http://dellstad.se/?p=1053' />
    <link rel="alternate" type="application/json+oembed" href="http://dellstad.se/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdellstad.se%2Fmotivactr%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://dellstad.se/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdellstad.se%2Fmotivactr%2F&#038;format=xml" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />


    <link rel="shortcut icon" href="http://dellstad.se/wp-content/uploads/2017/06/logoB.png" />	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>


    <script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("button.et_pb_contact_submit").text('Skicka');
		});
    </script>

@endsection

@section("body")
    <body class="page-template page-template-page-template-blank page-template-page-template-blank-php page page-id-1053 et_pb_button_helper_class et_transparent_nav et_fullwidth_nav et_fixed_nav et_show_nav et_hide_mobile_logo et_cover_background et_pb_gutter linux et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_left et_pb_pagebuilder_layout et_right_sidebar et_divi_theme chrome">
    <div id="page-container">

        <div id="main-content">



            <article id="post-1053" class="post-1053 page type-page status-publish hentry">


                <div class="entry-content">
                    <div class="et_pb_section  et_pb_section_0 et_pb_with_background et_section_regular" data-padding="0px||0px|">



                        <div class=" et_pb_row et_pb_row_0 et_pb_gutters1 et_pb_row_fullwidth">


                            <div class="et_pb_column et_pb_column_1_2  et_pb_column_0">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_0">


                                    <div class="et_pb_text_inner">

                                        <p>Project</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_1">


                                    <div class="et_pb_text_inner">

                                        <p>SmartLog</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_2">


                                    <div class="et_pb_text_inner">

                                        <p>We set out to help Kunskapskolan with increasing usage of study strategies and improve user experience while using Loggboken.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2  et_pb_column_1">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_0 et_pb_image_sticky">
                                    <img src="images/header.png" alt="" />

                                </div>
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row --><div class=" et_pb_row et_pb_row_1 et_pb_gutters1">


                            <div class="et_pb_column et_pb_column_1_4  et_pb_column_2">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_1 et_always_center_on_mobile">
                                    <a href="#ux"><img src="http://dellstad.se/wp-content/uploads/2017/12/04-1.png" alt="" />
                                    </a>
                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_3">


                                    <div class="et_pb_text_inner">

                                        <p>USER EXPERIENCE</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_4">


                                    <div class="et_pb_text_inner">

                                        <p>Our solution improves user experience while using Kunskapsskolans platform.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4  et_pb_column_3">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_2 et_always_center_on_mobile">
                                    <a href="#ml"><img src="http://dellstad.se/wp-content/uploads/2017/12/04-1.png" alt="" />
                                    </a>
                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_5">


                                    <div class="et_pb_text_inner">

                                        <p>Intelligence</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_6">


                                    <div class="et_pb_text_inner">

                                        <p>Our clever product collects crucial data that can help improve learning among students.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4  et_pb_column_4">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_3 et_always_center_on_mobile">
                                    <a href="#ob"><img src="http://dellstad.se/wp-content/uploads/2017/12/04-1.png" alt="" />
                                    </a>
                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_7">


                                    <div class="et_pb_text_inner">

                                        <p>Opportunities</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_8">


                                    <div class="et_pb_text_inner">

                                        <p>The data can be used by professionals and teachers to make targeted efforts to improve their educational quality.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4  et_pb_column_5 et_pb_column_empty">



                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_section -->
                    <div id="ux" class="et_pb_section  et_pb_section_3 et_pb_with_background et_section_regular">



                        <div class=" et_pb_row et_pb_row_2">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_6">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_9">


                                    <div class="et_pb_text_inner">

                                        <p>This is Loggboken as it looks today</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row --><div class=" et_pb_row et_pb_row_3">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_7">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_4 et_always_center_on_mobile">
                                    <img src="images/loggbok.png" alt="" />

                                </div>
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_section --><div class="et_pb_section  et_pb_section_4 et_pb_with_background et_section_regular">



                        <div class=" et_pb_row et_pb_row_4">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_8">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_10">


                                    <div class="et_pb_text_inner">

                                        <p>Current Problems</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_11">


                                    <div class="et_pb_text_inner">

                                        <p>Students are supposed to select strategies and evaluate them as they go about their education and learning at school. Strategies are not selected or evaluated by students today much due to how Loggboken is designed. </p>
                                        <p>No data and feedback can be collected and taken in by the team of pedagogical experts that develop these strategies for the students.</p>
                                        <p>Loggboken could be a huge tool that can help teachers and improve educational quality. But there is still improvements that needs to be made.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_section --><div class="et_pb_section  et_pb_section_5 et_section_regular">



                        <div class=" et_pb_row et_pb_row_5">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_9">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_12">


                                    <div class="et_pb_text_inner">

                                        <p>The Design Process</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_5 et_always_center_on_mobile">
                                    <img src="images/designprocess.png" alt="" />

                                </div>
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_section --><div class="et_pb_section  et_pb_section_6 et_pb_with_background et_section_regular">



                        <div class=" et_pb_row et_pb_row_6">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_10">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_13">


                                    <div class="et_pb_text_inner">

                                        <p>User Studies</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_14">


                                    <div class="et_pb_text_inner">

                                        <p>We had to understand the actual users of Loggboken. For that we all went and participated at one of Kunskapsskolans schools.</p>
                                        <p>We found that the students did not use the strategy tool at all. The ones who did use strategies in their studies prefered to keep them on paper rather than on the platform or did not formally use them at all.</p>
                                        <p>We realized that the biggest issue with the current application was that <strong>the current design was not intuitive and simple to use.</strong></p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_section -->

                    <div class="et_pb_section  et_pb_section_8 et_pb_with_background et_section_regular">



                        <div class=" et_pb_row et_pb_row_9 et_pb_equal_columns">


                            <div class="et_pb_column et_pb_column_1_2  et_pb_column_13">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_6 et_always_center_on_mobile et_pb_has_overlay">
                                    <a href="images/focusquestions.png" class="et_pb_lightbox_image" title=""><img src="images/focus.png" alt="" />
                                        <span class="et_overlay et_pb_inline_icon" data-icon="&#x54;"></span></a>
                                </div>
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2  et_pb_column_14">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_18">


                                    <div class="et_pb_text_inner">

                                        <p>Focus Groups</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_19">


                                    <div class="et_pb_text_inner">

                                        <p>We performed focus group interviews at Kunskapsskolan Nacka where the students could comment and discuss their thoughts with each other and with us under a relaxed setting.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row --><div class=" et_pb_row et_pb_row_10 et_pb_equal_columns">


                            <div class="et_pb_column et_pb_column_1_2  et_pb_column_15">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_20">


                                    <div class="et_pb_text_inner">

                                        <p>Intuitive</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_21">


                                    <div class="et_pb_text_inner">

                                        <p>A simple design solution was a key point taken away from the focus group interviews. It was clear that objects and functionalities would need to be rearranged and simplified for more clarity.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2  et_pb_column_16">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_7 et_always_center_on_mobile et_pb_has_overlay">
                                    <a class="et_pb_lightbox_image" title=""><img src="images/intuitive.png" alt="" />
                                        <span class="et_overlay et_pb_inline_icon" data-icon="&#x54;"></span></a>
                                </div>
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row --><div class=" et_pb_row et_pb_row_11 et_pb_equal_columns">


                            <div class="et_pb_column et_pb_column_1_2  et_pb_column_17">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_8 et_always_center_on_mobile et_pb_has_overlay">
                                    <a href="../images/feedbackloop.jpg" class="et_pb_lightbox_image" title=""><img src="../images/thinking.jpg" alt="" />
                                        <span class="et_overlay et_pb_inline_icon" data-icon="&#x54;"></span></a>
                                </div>
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2  et_pb_column_18">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_22">


                                    <div class="et_pb_text_inner">

                                        <p>Evaluable</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_23">


                                    <div class="et_pb_text_inner">

                                        <p>As one of the main problems of the current design is that no feedback or evaluation of strategies are sent in by students we needed to see what students had to say about this</p>
                                        <p> <strong>before</strong> a prototype was created.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_section --><div class="et_pb_section et_pb_fullwidth_section  et_pb_section_11 et_section_regular">



                        <div class="et_pb_fullwidth_menu et_pb_module et_pb_bg_layout_light et_pb_text_align_center et_dropdown_animation_fade  et_pb_fullwidth_menu_1" style="background-color: #ffffff;">


                            <div class="et_pb_row clearfix">
                                <nav class="fullwidth-menu-nav"><ul id="menu-motivactr-1" class="fullwidth-menu nav downwards"><li class="et_pb_menu_page_id-25161 menu-item menu-item-type-custom menu-item-object-custom menu-item-25161"><a href="#ux">LOGGBOKEN</a></li>
                                        <li class="et_pb_menu_page_id-25160 menu-item menu-item-type-custom menu-item-object-custom menu-item-25160"><a href="#ml">BIG DATA</a></li>
                                    </ul></nav>
                                <div class="et_mobile_nav_menu">
                                    <a href="#" class="mobile_nav closed">
                                        <span class="mobile_menu_bar"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div> <!-- .et_pb_section -->
                    <div id="ml" class="et_pb_section  et_pb_section_12 et_pb_with_background et_section_regular">



                        <div class=" et_pb_row et_pb_row_14">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_23">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_29">


                                    <div class="et_pb_text_inner">

                                        <p>MACHINE LEARNING</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_30">


                                    <div class="et_pb_text_inner">

                                        <p>COLLECTING DATA FOR DECISIONMAKING</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_module et-waypoint et_pb_image et_pb_animation_off et_pb_image_12 et_always_center_on_mobile">
                                    <img src="http://dellstad.se/wp-content/uploads/2017/12/segm.png" alt="" />

                                </div>
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_section --><div class="et_pb_section  et_pb_section_13 et_section_regular">



                        <div class=" et_pb_row et_pb_row_15">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_24">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_31">


                                    <div class="et_pb_text_inner">

                                        <p>To summarize</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_32">


                                    <div class="et_pb_text_inner">

                                        <p>Three pillars</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_33">


                                    <div class="et_pb_text_inner">

                                        <p>By asking what the students felt we <strong>improve experience for the end users.</strong> By listening to what central management needs, we <strong>collect data for future decision-making.</strong> </p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row --><div class=" et_pb_row et_pb_row_16 et_pb_gutters4 et_pb_row_fullwidth">


                            <div class="et_pb_column et_pb_column_1_3  et_pb_column_25">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_34">


                                    <div class="et_pb_text_inner">

                                        <p>Motivate Students</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_35">


                                    <div class="et_pb_text_inner">

                                        <p>Our solution motivates students to pick a strategy because they are recommended by peers and teachers.</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3  et_pb_column_26">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_36">


                                    <div class="et_pb_text_inner">

                                        <p>Targeted Strategies</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_37">


                                    <div class="et_pb_text_inner">

                                        <p>The strategy suggestions are based on teacher input and feedback from students for each specific subject at each specific step</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3  et_pb_column_27">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_38">


                                    <div class="et_pb_text_inner">

                                        <p>Collect Insights</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_39">


                                    <div class="et_pb_text_inner">

                                        <p>Analyzing different user behavior and characteristics such as, what school, what grade and so on could tell us if a certain strategy is prefered in one school over another and other relationships etc. This information is crucial to any business. </p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_section --><div class="et_pb_section  et_pb_section_14 et_pb_with_background et_section_regular">



                        <div class=" et_pb_row et_pb_row_17">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_28">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_40">


                                    <div class="et_pb_text_inner">

                                        <p>MODEL SELECTION</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_41">


                                    <div class="et_pb_text_inner">

                                        <p>Recommendation systems</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_42">


                                    <div class="et_pb_text_inner">

                                        <p>

                                            <span>We created a tag-based recommendation system as foundation to suggest strategies for different users. Based on previous feedback from teachers and peers the smart algorithm suggests a selection of strategies for a specific subject and step to the students. With the goal of improving usage of the strategy selection field while also increasing the quality of Loggboken in general by turning it into a potentially powerful data collection tool.</span></p>
                                        <p>&nbsp;</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row -->

                    </div> <div class="et_pb_section  et_pb_section_26 et_pb_with_background et_section_regular">



                        <div class=" et_pb_row et_pb_row_42 et_pb_row_fullwidth">


                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_66">


                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_80">


                                    <div class="et_pb_text_inner">

                                        <p>Team</p>

                                    </div>
                                </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_81">


                                    <div class="et_pb_text_inner">

                                        <p class="p1">This work has been carried out by</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                        </div> <!-- .et_pb_row --><div class=" et_pb_row et_pb_row_43">


                            <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3  et_pb_column_67">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_27 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/phille.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_82">


                                    <div class="et_pb_text_inner">

                                        <p>Philip Rumman</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->


                            <div class="et_pb_column et_pb_column_1_3  et_pb_column_68">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_28 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/lurre.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_83">


                                    <div class="et_pb_text_inner">

                                        <p>Erik Lundsten</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->
                            <div class="et_pb_column et_pb_column_1_4  et_pb_column_69">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_28 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/benny.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_83">


                                    <div class="et_pb_text_inner">

                                        <p>Benny Feng</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->


                            <div class="et_pb_column et_pb_column_1_3  et_pb_column_70">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_28 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/farre.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_83">


                                    <div class="et_pb_text_inner">

                                        <p>Farzana Madoosh</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3  et_pb_column_69">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_28 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/torsten.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_83">


                                    <div class="et_pb_text_inner">

                                        <p>Erik Thorstensson</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4  et_pb_column_69">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_28 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/carls.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_83">


                                    <div class="et_pb_text_inner">

                                        <p>Fredrik Carls</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_69">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_28 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/robban.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_83">


                                    <div class="et_pb_text_inner">

                                        <p>Robert Bojs</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3  et_pb_column_71">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_28 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/rickard.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_83">


                                    <div class="et_pb_text_inner">

                                        <p>Rickard Johansson</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4  et_pb_column_71">


                                <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_bottom et_pb_image_28 et_always_center_on_mobile">
                                    <img  class="profilepic" src="images/norre.jpg" alt="Avatar" />

                                </div><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_83">


                                    <div class="et_pb_text_inner">

                                        <p>Felix Noren</p>

                                    </div>
                                </div> <!-- .et_pb_text -->
                            </div> <!-- .et_pb_column -->

                        </div> <!-- .et_pb_row -->

                    </div> <!-- .et_pb_row -->

                </div> <!-- .et_pb_row -->
        </div> <!-- .et_pb_row -->

    </div> <!-- .et_pb_section -->
    </div> <!-- .entry-content --><


    </article> <!-- .et_pb_post -->



    </div> <!-- #main-content -->


    </div> <!-- #page-container -->
    <script type='text/javascript' src='http://dellstad.se/wp-includes/js/jquery/jquery.js'></script>
    <link rel='stylesheet' id='et-gf-roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&#038;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese' type='text/css' media='all' />
    <link rel='stylesheet' id='et-gf-montserrat-css'  href='http://fonts.googleapis.com/css?family=Montserrat:400,700&#038;subset=latin' type='text/css' media='all' />
    <script type='text/javascript' src='http://dellstad.se/wp-content/themes/Divi/includes/builder/scripts/frontend-builder-global-functions.js'></script>
    <script type='text/javascript' src='http://dellstad.se/wp-content/themes/Divi/includes/builder/scripts/jquery.mobile.custom.min.js'></script>
    <script type='text/javascript' src='http://dellstad.se/wp-content/themes/Divi/js/custom.js'></script>
    <script type='text/javascript' src='http://dellstad.se/wp-content/themes/Divi/includes/builder/scripts/jquery.fitvids.js'></script>
    <script type='text/javascript' src='http://dellstad.se/wp-content/themes/Divi/includes/builder/scripts/waypoints.min.js'></script>
    <script type='text/javascript' src='http://dellstad.se/wp-content/themes/Divi/includes/builder/scripts/jquery.magnific-popup.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
		var et_pb_custom = {"ajaxurl":"http:\/\/dellstad.se\/wp-admin\/admin-ajax.php","images_uri":"http:\/\/dellstad.se\/wp-content\/themes\/Divi\/images","builder_images_uri":"http:\/\/dellstad.se\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"e8678e38e0","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"098d3c7dec","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","is_builder_plugin_used":"","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","is_ab_testing_active":"","page_id":"1053","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"yes","is_shortcode_tracking":""};
        /* ]]> */
    </script>
    <script type='text/javascript' src='http://dellstad.se/wp-content/themes/Divi/includes/builder/scripts/frontend-builder-scripts.js'></script>
    <script type='text/javascript' src='http://dellstad.se/wp-includes/js/wp-embed.min.js'></script>
    </body>





@endsection