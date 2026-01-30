<?php include '_a_header.php'; ?>
<div class="container-fluid p-0 mt-0"> 
<div class="h4 text-uppercase text-center mt-3 mb-0 page-width ">User Interface Design (UI)</div>
<div class="bigtab bigtab-xl f1 f-u mh Xbg-w t-c p-2">
    <div class="bigtab-in bigtab-with-border mb-3">
        <a href="/ui" class="<?php if($arg[0]=='ui'){print 'active';}?>" >Intro</a>
        <a href="/ui-web-designs?keyword=branding, website, identity" class="d-none <?php if($arg[0]=='ui-web-designs'){print 'active';}?>" >2023 Website Designs</a>       
        <a href="/ui-2023?keyword=branding, website, identity" class="<?php if($arg[0]=='ui-2023'){print 'active';}?>" >Website Designs 2023</a>       
        <a href="/ui-2022?keyword=branding, website, identity, logo" class="<?php if($arg[0]=='ui-2022'){print 'active';}?>" >2022</a>       
        <a href="/ui-2020?keyword=branding, website, identity" class="<?php if($arg[0]=='ui-2020'){print 'active';}?>" >2020</a>       
        <a href="/ui-2015?keyword=branding, website, identity, logo" class="<?php if($arg[0]=='ui-2015'){print 'active';}?>" >2015</a>       
        <a href="/ui-2010?keyword=branding, website, identity" class="<?php if($arg[0]=='ui-2010'){print 'active';}?>" >2010</a>       
        <a href="/ui-2005?keyword=branding, website, identity, logo" class="<?php if($arg[0]=='ui-2005'){print 'active';}?>" >2005</a>       
        <a href="/ui-blog?keyword=branding, identity, website, web, logo, icon" class="<?php if($arg[0]=='ui-blog'){print 'active';}?>" >My Blog posts</a>
    </div>  
</div>
<?php if($arg[0]=='ui'){include 'ui-content.php';} ?>
<?php include '_snippet-image-gallery.php'; ?>

</div>

<?php $keyword=''; if(!empty($_GET['keyword'])){$keyword = $_GET['keyword'];} if($arg[0]=='ui-blog' || !empty($keyword)){include '_snippet-blog.php'; } ?>
<?php include '_a_footer.php'; ?>