<?php include '_a_header.php'; ?>
<div class="container-fluid p-0 mt-0">   
<div class="h4 text-uppercase text-center mt-3 mb-0 page-width ">Fine Art & Digial Art</div>
<div class="bigtab bigtab-xl f1 f-u mh Xbg-w t-c p-2">
    <div class="bigtab-in bigtab-with-border mb-3">
        <?php $style='Xtext-dark fw-bold active ';?>
        <a href="/art" class="<?php echo ($arg[0] === 'art') ? $style : ''; ?>">Intro</a>     
        
        
        
        
        <a href="/art-bg?keyword=digital art, vector, digital painting" class="<?php echo ($arg[0] === 'art-bg') ? $style : ''; ?>">Vector Art</a>
        <a href="/art-animation?keyword=animation, 3d" class="<?php echo ($arg[0] === 'art-animation') ? $style : ''; ?>">2D Animation</a>             
        <a href="/art-greeting?keyword=greeting" class="<?php echo ($arg[0] === 'art-greeting') ? $style : ''; ?>">Greeting Design</a>     
        <a href="/art-blog?keyword=painting, drawing, sculpture, tattoo, body , art" class="<?php if($arg[0]=='art-blog'){print 'active';}?>" >Blog</a>
    </div>
</div>    
</div>


<?php if($arg[0]=='art'):?>
  <div id="mycontent-wrapper" class="pagewidth block">
  <div class="pagewidth one-column">
  <div id="mycontent" class="boxshadow">
    <div id="node-header" class="p-1">
              <div class="clear h4 bg-dark text-white p-2 ps-4">Fine Art </div>
              <ul class=" fs-5 mb-2">
            <li>Good knowledge in creating 2d Backgrounds, Photoshop BGs</li>
            <li>Digital illustration, Vexel Art, Vector Animations</li>
            <li>Short 2D animations for Elearning projects and Websites</li>
            <li>Drawing, Painting, character Drawing and comic illustrations</li>
            </ul>
            <style>
              .art-div{ }
              .art-div a{display:inline-block; width:310px;padding:5px;}
            </style>           
    </div>
  </div>
  </div>
  </div>
<?php endif;?>

<?php include '_snippet-image-gallery.php'; ?>
</div>

<?php $keyword=''; if(!empty($_GET['keyword'])){$keyword = $_GET['keyword'];} if($arg[0]=='art-blog' || !empty($keyword)){include '_snippet-blog.php'; } ?>
<?php include '_a_footer.php'; ?>



 