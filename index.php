<?php
/*
[Main HTML File]

Project:	  HTML skeleton
Version:	  1.1
Last change:  19. 11. 2015
Creator:	  Pavel Krejčí

TODO:
- Browser detection: better JS plugin
- Grunt: CSS/JS combine, compress, minify

UTILITIES:
Twitter Bootstrap: http://getbootstrap.com/
Real Favicon Generator: http://realfavicongenerator.net/
GEO meta tag Generator: http://www.geo-tag.de/generator/en.html
Facebook Open Graph: https://developers.facebook.com/docs/sharing/opengraph
Twitter Cards: https://dev.twitter.com/cards/markup
W3C validator: https://validator.w3.org/
W3C CSS validator: https://jigsaw.w3.org/css-validator/

CONFIGURATION:
1. Customize and download Twitter Bootstrap (http://getbootstrap.com/customize/)
2. Generate icons over Real Favicon Generator: http://realfavicongenerator.net/
*/

$root = "";
$language = "cs";
$isDebug = TRUE;
$domain = '';

include_once("application/functions/global.func.php");
include_once("application/languages/" . $language . ".lang.php");
?>
<!DOCTYPE html>
<!--[if lte IE 8 ]><html class="ie ie8 lte8 lte9 oldie" lang="<?php echo $language; ?>"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lte9" lang="<?php echo $language; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="not-ie" lang="<?php echo $language; ?>"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HTML/CSS/JS Skeleton | November 2015 | Pavel Krejčí</title>

        <!-- #CSS assets -->
        <?php //Combine, compress, minify CSS - Start ?>
        <link rel="stylesheet" href="assets/frameworks/bootstrap-3.3.5/custom/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/frameworks/bootstrap-3.3.5/custom/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/main<?php if(!$isDebug) { echo '.min'; } ?>.css">
        <link rel="stylesheet" href="assets/js/jquery/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/js/jquery/jquery-ui/jquery-ui.structure.min.css">
        <?php //Combine, compress, minify CSS - End ?>
        <link rel="author" href="humans.txt" type="text/plain">

        <!-- #JS assets -->
        <?php //Combine, compress, minify JS - Start ?>
        <script src="assets/js/plugins/browser-detection.min.js"></script>
        <script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
        <script src="assets/js/jquery/plugins/jquery.browser.plugin/jquery.browser.min.js"></script>
        <?php //Combine, compress, minify JS - End ?>

        <?php //Combine, compress, minify JS - Start ?>
        <!--[if lt IE 9]>
        <script src="assets/js/plugins/html5shiv.min.js"></script>
        <script src="assets/js/plugins/respond.min.js"></script>
        <![endif]-->
        <?php //Combine, compress, minify JS - End ?>

        <!-- #Meta information -->
        <meta name="keywords" content="Keywords">
        <meta name="description" content="Description">
        <meta name="geo.region" content="CZ-PR">
        <meta name="geo.placename" content="Prague">
        <meta name="geo.position" content="50.104825;14.443935">
        <meta name="ICBM" content="50.104825, 14.443935">
        <meta name="author" content="Pavel Krejčí | www.delamweby.cz (c) 2015">
        <meta name="viewport" content="width=device,initial-scale=1,maximum-scale=1,user-scalable=yes">

        <!-- #Facebook Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.domenawebu.cz/">
        <meta property="og:title" content="H1 Page title">
        <meta property="og:site_name" content="HTML/CSS/JS Skeleton | November 2015 | Pavel Krejčí">
        <meta property="og:description" content="Description">
        <meta property="og:image" content="/assets/images/fb-image-1500x1500.png">

        <!-- #Twitter Cards -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="H1 Page title">
        <meta name="twitter:description" content="Description">
        <meta name="twitter:image" content="/assets/images/twitter-image-1200x627.png">

        <!-- #Icons -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg"<?php // color="#5bbad5" is not valid ?>>
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="canonical" href="http://www.domain.cz/">
        <!--[if gte IE 9]>
        <style type="text/css">
            .gradient {
                filter: none;
            }
        </style>
        <![endif]-->
    </head>
    <body id="web-id" class="no-js <?php echo $language; ?>">
        <script type='text/javascript'>
            //<![CDATA[
            document.body.className=document.body.className.replace(/no-js/,'js');
            document.body.className=document.body.className + " " + window.browser.to_string();
            //]]>
        </script>

        <!-- #Flash messages -->
        <!--[if lte IE 8]>
        <div role="alert" class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-label="Zavřít">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><?php echo l("OLD_BROWSER"); ?></strong> <?php echo l("OLD_BROWSER_TEXT"); ?>
        </div>
        <![endif]-->

        <noscript>
            <div role="alert" class="alert alert-danger">
                <strong><?php echo l("JAVASCRIPT_OFF"); ?></strong> <?php echo l("JAVASCRIPT_OFF_TEXT"); ?>
            </div>
        </noscript>

        <div class="web-wrapper">

            <!-- #Header -->
            <header class="header container-full" id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header-content clearfix">
                                <!-- #Logo -->
                                <a class="logo" href="#name" title="Name">
                                    <img class="img-responsive" src="assets/images/bg-header-logo.png" alt="Name">
                                </a>
                                <!-- #Main menu -->
                                <nav class="navbar navbar-default">
                                    <div class="container">
                                        <div class="navbar-header">
                                            <button aria-expanded="false" data-target="#navbar-main" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a href="#" class="navbar-brand" title="Name">Name</a>
                                        </div>
                                        <div id="navbar-main" class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="active"><a href="#" title="Homepage">Homepage</a></li>
                                                <li><a href="#" title="Link">Link</a></li>
                                                <li><a href="#" title="Link">Link</a></li>
                                                <li><a href="#" title="Link">Link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- #Content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-9">

                            <!-- #Main content -->
                            <section class="main-content clearfix">
                                <h1>H1 page title <small>Subtitle</small></h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and <a href="#" title="">typesetting industry</a>.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book.</p>
                                <h2>H2 page title</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and <a href="#" title="">typesetting industry</a>.</p>
                                <h3>H3 page title</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and <a href="#" title="">typesetting industry</a>.</p>
                                <h4>H4 page title</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and <a href="#" title="">typesetting industry</a>.</p>
                                <h5>H5 page title</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and <a href="#" title="">typesetting industry</a>.</p>
                                <h6>H6 page title</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and <a href="#" title="">typesetting industry</a>.</p>
                                <h2>H2 page title</h2>
                                <ul>
                                    <li>Lorem Ipsum is simply dummy text of the printing</li>
                                    <li>Lorem Ipsum is simply</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing</li>
                                </ul>
                                <hr />
                                <h2>H2 page title</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Heading</th>
                                            <th>Heading</th>
                                            <th>Heading</th>
                                            <th>Heading</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                        <tr>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                        <tr>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                        <tr>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                        <tr>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>

                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">

                            <!-- #Sidebar -->
                            <aside class="sidebar">

                                <!-- #Widget -->
                                <div class="widget widget-1">
                                    <h3>Widget</h3>
                                    <div class="widget-content">
                                        <p><strong>Widget content</strong></p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.</p>
                                    </div>
                                </div>

                                <!-- #Widget -->
                                <div class="widget widget-2">
                                    <h3>Widget</h3>
                                    <div class="widget-content">
                                        <ul>
                                            <li><a href="" title="">Lorem Ipsum is simply dummy text</a></li>
                                            <li><a href="" title="">Lorem Ipsum is simply dummy text</a></li>
                                            <li><a href="" title="">Lorem Ipsum is simply dummy text</a></li>
                                            <li><a href="" title="">Lorem Ipsum is simply dummy text</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- #Widget -->
                                <div class="widget widget-3">
                                    <h3>Widget</h3>
                                    <div class="widget-content">
                                        <p><strong>Widget content</strong></p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>

            <!-- #Footer -->
            <footer class="footer container-full">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="footer-content">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="text clearfix">
                                            <img class="logo" src="assets/images/bg-footer-logo.png" alt="Domain.com">
                                            <strong>Domain.com</strong> ©&nbsp;2015
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="links clearfix">
                                            <ul class="clearfix">
                                                <li><a href="#link" title="Link">Link</a></li>
                                                <li><a href="#link" title="Link">Link</a></li>
                                                <li><a href="#link" title="Link">Link</a></li>
                                                <li><a id="link-top" href="#top" title="Top">Top <span class="glyphicon glyphicon-chevron-up"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <?php //Combine, compress, minify JS - Start ?>
        <script type="text/javascript" src="assets/frameworks/bootstrap-3.3.5/custom/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/languages/<?php echo $language; ?>.lang.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <?php //Combine, compress, minify JS - End ?>

        <script type="text/javascript">
            //<![CDATA[
            $(document).ready(function () {
                /* Show Main.js version */
                PROJECT.default.showMainJsVersion();
            });
            //]]>
        </script>
    </body>
</html>
