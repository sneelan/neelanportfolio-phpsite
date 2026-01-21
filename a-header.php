<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Neelakandan - Creative Designer | Graphic Design &amp; Web Design</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">                

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

        <link rel="stylesheet" href="css/tech.css">
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
                <?php $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); $segments = explode('/', $path); $currenturl = end($segments); $projectFolder = basename(__DIR__);?>
                <div class="menulinks">
                     <a href="index" class="<?php if(!$currenturl || $currenturl=='index' || $currenturl==$projectFolder){print 'active';}?>">About</a>
                    <a href="ui" class="<?= $currenturl == 'ui' ? 'active' : '' ?>">UI</a>
                    <a href="ux" class="<?php 
                    if ($currenturl=='ux'
                    || $currenturl=='ux-irctc'
                    || $currenturl=='ux-mobile'
                    || $currenturl=='ux-mobile2'
                    || $currenturl=='ux-website'
                    || $currenturl=='ux-crm'
                    ){print 'active';}
                    ?>">UX</a>
                    <a href="graphics" class="<?= $currenturl == 'graphics' ? 'active' : '' ?>"><span class="d-none d-lg-inline">Graphics</span></a>
                    <a href="art" class="<?= $currenturl == 'art' ? 'active' : '' ?>">Art</a>
                    <a href="blog" class="<?= $currenturl == 'blog' ? 'active' : '' ?>">Blog</a>
                    <!--<a target="_blank" href="https://docs.google.com/document/d/1p58FEhLkl8djv7e3yVGV66T60dw_F8u3SE0CGCtdf9c/edit?usp=sharing">CV</a>     -->
                </div>
            </div>
        </div>
    </div>
</div>
</header>