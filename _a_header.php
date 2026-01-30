<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Neelakandan - Creative Designer | Graphic Design &amp; Web Design</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">                

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

        <link rel="stylesheet" href="/css/portfolio.css">
        <link rel="stylesheet" href="/scss/portfolio-extra.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="js/nel-jq.js"></script>
        <meta charset="UTF-8">
        <meta property="og:title" content="Neelakandan - Creative Designer">
        <meta property="og:image" content="images/neelan.jpg">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<header>
<div class="fullwidth" id="myheader">
    <div class="pagewidth">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo">
                    <a id="logo-icon" href="index" style=""></a>
                    <a id="logo-face" href="index" style="display: none;"></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header-right">
                    <div class="topbuttons f-13">
                        <a class="fr me-3" href="https://twitter.com/mywebneel" target="_blank"
                            title="27,000 Followers"><i class="bi bi-twitter fs-6 pe-1"></i>Twitter-27K</a>
                        <a class="fr me-3" href="http://www.facebook.com/webneeldotcom" target="_blank"
                            title="1,69,000 Followers"><i class="bi bi-facebook fs-6 pe-1"></i>Facebook</a>
                        <a class="fr me-3" href="https://www.linkedin.com/in/sneelan" target="_blank"><i
                                class="bi bi-linkedin fs-6 pe-1"></i></a>
                    </div>
                </div>
                <?php 
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$segments = explode('/', $path);
$projectFolder = basename($_SERVER['DOCUMENT_ROOT']) === basename(__DIR__) ? null : basename(__DIR__);
if ($projectFolder && isset($segments[0]) && $segments[0] === $projectFolder) { array_shift($segments); }
$arg[0] = $segments[0] ?? null; $arg[1] = $segments[1] ?? null;

                ?>
                <div class="menulinks">
                     <a href="/index" class="<?php if(!$arg[0] || $arg[0]=='index' || $arg[0]==$projectFolder){print 'active';}?>">About</a>
                    <a href="/ui" class="<?php if( 
                        $arg[0]=='ui'
                        || $arg[0]=='ui-2023' 
                        || $arg[0]=='ui-2022' 
                        || $arg[0]=='ui-2020' 
                        || $arg[0]=='ui-2015' 
                        || $arg[0]=='ui-2010' 
                        || $arg[0]=='ui-2005' 
                        || $arg[0]=='ui-blog' 
                    ){print 'active';}?>">UI</a>
                    <a href="/ux-new" class="<?php if( 
                        $arg[0]=='ux-new'
                        || $arg[0]=='ux-crm' 
                        || $arg[0]=='ux-irctc' 
                        || $arg[0]=='ux-mobile' 
                        || $arg[0]=='ux-mobile2' 
                        || $arg[0]=='ux-website' 
                        || $arg[0]=='ux-2005' 
                        || $arg[0]=='ux-blog' 
                    ){print 'active';}?>">UX</a>
                    <a href="/graphics" class="<?php if( 
                        $arg[0]=='graphics'
                        || $arg[0]=='graphics-logo' 
                        || $arg[0]=='graphics-icon' 
                        || $arg[0]=='graphics-print' 
                        || $arg[0]=='graphics-other' 
                        || $arg[0]=='graphics-greeting' 
                        || $arg[0]=='graphics-bg' 
                        || $arg[0]=='graphics-animation' 
                        || $arg[0]=='graphics-oldportfolio' 
                        || $arg[0]=='graphics-blog' 
                    ){print 'active';}?>"><span class="d-none d-lg-inline">Graphics</span></a>
                    <a href="/art" class="<?php if( 
                        $arg[0]=='art'
                        || $arg[0]=='art-greeting' 
                        || $arg[0]=='art-bg' 
                        || $arg[0]=='art-animation'
                        || $arg[0]=='art-blog' 
                    ){print 'active';}?>">Art</a>
                    <a href="/blog" class="<?= $arg[0] == 'blog' ? 'active' : '' ?>">Blog</a>
                    <a href="/cms/" class="<?= $arg[0] == 'blog' ? 'active' : '' ?>">Post1</a>
                    <!--<a target="_blank" href="https://docs.google.com/document/d/1p58FEhLkl8djv7e3yVGV66T60dw_F8u3SE0CGCtdf9c/edit?usp=sharing">CV</a>     -->
                </div>
            </div>
        </div>
    </div>
</div>
</header>