<div class="pagewidth p-0 mt-0">    
<?php 
    $gallery='';$gallery_set='';$title='';
    if($arg[0]=='ui'){
        $thumbnail=1;$flex_wrapper_close=0;$flex_wrapper_open=1;     
        $gallery='webdesign 2023'; $gallery_set_link='/ui-2023';include '_snippet-image-gallery-set.php';
        $gallery='webdesign 2022'; $gallery_set_link='/ui-2022';include '_snippet-image-gallery-set.php';
        $gallery='webdesign 2020'; $gallery_set_link='/ui-2020';include '_snippet-image-gallery-set.php';
        $gallery='webdesign 2015'; $gallery_set_link='/ui-2015';include '_snippet-image-gallery-set.php';
        $gallery='webdesign 2010'; $gallery_set_link='/ui-2010';include '_snippet-image-gallery-set.php';
        $gallery='webdesign 2005'; $gallery_set_link='/ui-2005';include '_snippet-image-gallery-set.php';
        $flex_wrapper_close=1;
        $gallery='webdesign 2005'; include '_snippet-image-gallery-set.php';        
        }    
    if($arg[0]=='ui-2023'){$gallery='webdesign 2023';$thumbnail=1; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='ui-2022'){$gallery='webdesign 2022';$thumbnail=1; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='ui-2020'){$gallery='webdesign 2020';$thumbnail=1; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='ui-2015'){$gallery='webdesign 2015';$thumbnail=1; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='ui-2010'){$gallery='webdesign 2010';$thumbnail=1; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='ui-2005'){$gallery='webdesign 2005';$thumbnail=1; include '_snippet-image-gallery-all.php';} 
    
    if($arg[0]=='graphics'){
        $thumbnail=1;$flex_wrapper_close=0;$flex_wrapper_open=1;     
        $gallery='logo design'; $gallery_set_link='/graphics-logo';$thumbnail=0;include '_snippet-image-gallery-set.php';
        $gallery='icon design'; $gallery_set_link='/graphics-icon';include '_snippet-image-gallery-set.php';
        $gallery='print design'; $gallery_set_link='/graphics-print';include '_snippet-image-gallery-set.php';
        $gallery='other designs'; $gallery_set_link='/graphics-other';include '_snippet-image-gallery-set.php';
        $gallery='greeting design'; $gallery_set_link='/graphics-greeting';include '_snippet-image-gallery-set.php';
        $gallery='bg';  $title='Vector Illustration';$gallery_set_link='/graphics-bg';include '_snippet-image-gallery-set.php';$title='';
        $gallery='animation';  $thumbnail=0; $title='2D Animation';$gallery_set_link='/graphics-animation';include '_snippet-image-gallery-set.php';$title='';
        $flex_wrapper_close=1;
        $gallery='old portfolio'; $gallery_set_link='/graphics-oldportfolio';include '_snippet-image-gallery-set.php';
        }
    if($arg[0]=='graphics-logo'){$gallery='logo design';$thumbnail=0; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='graphics-icon'){$gallery='icon design';$thumbnail=0; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='graphics-print'){$gallery='print design';$thumbnail=0; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='graphics-other'){$gallery='other designs';$thumbnail=0; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='graphics-greeting'){$gallery='greeting design';$thumbnail=0; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='graphics-bg'){$gallery='bg';$thumbnail=0; $title='Vector Illustration';include '_snippet-image-gallery-all.php';$title='';} 
    if($arg[0]=='graphics-animation'){$gallery='animation';$thumbnail=0; $title='2D Animation';include '_snippet-image-gallery-all.php';$title='';} 
    if($arg[0]=='graphics-oldportfolio'){$gallery='old portfolio';$thumbnail=0; include '_snippet-image-gallery-all.php';} 

    if($arg[0]=='art'){
        $thumbnail=1;$flex_wrapper_close=0;$flex_wrapper_open=1;     
                
        $gallery='bg';  $thumbnail=0; $title='Vector Illustration';$gallery_set_link='/art-bg';include '_snippet-image-gallery-set.php';$title='';
        $gallery='greeting design';  $thumbnail=0;$gallery_set_link='/art-greeting';include '_snippet-image-gallery-set.php';
        $flex_wrapper_close=1;
        $gallery='animation';  $thumbnail=0; $title='2D Animation';$gallery_set_link='/art-animation';include '_snippet-image-gallery-set.php';$title='';
        
        
    }
    
    if($arg[0]=='art-bg'){$gallery='bg';$thumbnail=0; $title='Vector Illustration';include '_snippet-image-gallery-all.php';$title='';} 
    if($arg[0]=='art-greeting'){$gallery='greeting design';$thumbnail=0; include '_snippet-image-gallery-all.php';}
    if($arg[0]=='art-animation'){$gallery='animation';$thumbnail=0; $title='2D Animation';include '_snippet-image-gallery-all.php';$title='';} 
    
    ?>    
    <?php if(!empty($xxx)):?>
        <a href="/ui-logo">Logo Designs</a>              
        <a href="/ui-icon">Icon Designs</a> 
        <a href="/ui-greeting">Greeting Designs</a>             
        <a href="/ui-print">Print Designs</a>        
        <a href="/ui-other">Other-designs</a>        
        <a href="/ui-bg">Vector, Animation & Digital Art</a>
    <?php endif;?>
    <?php if(!empty($xxx)):?>
        <?php // $title='Vector Art, Animation & Digital Art'; $gallery='bg';  ?>
        <?php //$gallery='other designs';  ?>
        <?php //$gallery='print design';  ?>
        <?php //$gallery='greeting design';  ?>
        <?php //$gallery='icon design';  ?>
        <?php //$gallery='logo design';  ?>

        <?php $title='OLD Mobile UI design - 2010'; $gallery='webdesign mobile ui'; $title=''; ?>
        <?php //$title='My Old Portfolio website (2006-2010)';$gallery='old portfolio'; $thumbnail='';$title=''; ?>
    <?php endif;?>
</div>