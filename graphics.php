<?php include '_a_header.php'; ?>
<div class="container-fluid p-0 mt-0">   
<div class="h4 text-uppercase text-center mt-3 mb-0 page-width ">Graphic Design</div>
<div class="bigtab bigtab-xl f1 f-u mh Xbg-w t-c p-2">
    <div class="bigtab-in bigtab-with-border mb-3">
        <?php $style='Xtext-dark fw-bold active ';?>
        <a href="/graphics" class="<?php echo ($arg[0] === 'graphics') ? $style : ''; ?>">Intro</a>
        <a href="/graphics-logo?keyword=logo, branding" class="<?php echo ($arg[0] === 'graphics-logo') ? $style : ''; ?>">Logo</a>
        <a href="/graphics-icon?keyword=icon" class="<?php echo ($arg[0] === 'graphics-icon') ? $style : ''; ?>">Icon</a>
        <a href="/graphics-print?keyword=print, brochure, business" class="<?php echo ($arg[0] === 'graphics-print') ? $style : ''; ?>">Print</a>
        <a href="/graphics-other?keyword=package, packaging, product, creative design, brilliant design,manipulation" class="<?php echo ($arg[0] === 'graphics-other') ? $style : ''; ?>">Others</a>
        <a href="/graphics-greeting?keyword=greeting" class="<?php echo ($arg[0] === 'graphics-greeting') ? $style : ''; ?>">Greeting</a>     
        <a href="/graphics-bg?keyword=digital art, vector, digital painting" class="<?php echo ($arg[0] === 'graphics-bg') ? $style : ''; ?>">Vector</a>     
        <a href="/graphics-animation?keyword=animation, 3d" class="<?php echo ($arg[0] === 'graphics-animation') ? $style : ''; ?>">Animation</a>     
        <a href="/graphics-oldportfolio?keyword=branding, portfolio" class="<?php echo ($arg[0] === 'graphics-oldportfolio') ? $style : ''; ?>">Old Portfolio</a>     
        <a href="/graphics-blog?keyword=logo,icon,print,brochure,business,package,packaging,manipulation, collage, photoshop, logo, icon, print, greeting, animation, greeting,vecor,2d animation" class="<?php if($arg[0]=='graphics-blog'){print 'active';}?>" >Blog</a>
    </div>
</div>    
</div>
<?php if($arg[0]=='graphics'){include 'graphics-content.php';} ?>
<?php include '_snippet-image-gallery.php'; ?>
<?php $keyword=''; if(!empty($_GET['keyword'])){$keyword = $_GET['keyword'];} if($arg[0]=='graphics-blog' || !empty($keyword)){include '_snippet-blog.php'; } ?>
<?php include '_a_footer.php'; ?>