<?php if($flex_wrapper_open==1):?>
    <div class="d-flex flex-wrap align-items-start justify-content-center gap-4 mb-3">
    <div class="container-xl m-auto bg-dark text-white h3 fw-normal text-center mb-1 p-2 rounded ">IMAGE GALLERY</div>
<?php $flex_wrapper_open=0; endif; ?> 
<div class="border border-3 border-secondary rounded d-inline-block mb-2">  
<?php $images = file(__DIR__ . '/data/'. $gallery.'.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);?>
<?php $totalImages = count($images); ?>
<?php if (!empty($images)): ?>
    <?php 
    //$img = $images[0]; 
    $img = $images[array_rand($images)];   
    $alt = pathinfo($img, PATHINFO_FILENAME); // remove extension
        $alt = str_replace('-', ' ', $alt);       // replace hyphens with space
        $alt = trim($alt);  ?>        
    <div class="popup-imgx cursor bg-white shadow-sm p-1 rounded">
        <a href="<?php print $gallery_set_link;?>" class="d-block position-relative" style="width:300px;height:300px;overflow-hidden;">
            <?php if(!empty($thumbnail) && $thumbnail==1){$small='small/';}else{ $small=null;} ?>
            <img src="content/works/<?php print $gallery;?>/<?php print $small;?><?php print $img; ?>" style="object-fit: cover;object-position: top center;cursor: pointer; width:100%;height:100%;" class="rounded " loading="lazy">
            <span style="position:absolute;top:8px;right:8px;"class="bg-warning border border-secondary border-2 shadow-sm rounded-circle text-dark px-2 py-1 rounded fw-bold" title="<?php echo $totalImages; ?> Images"><?php echo $totalImages; ?></span>
        </a>
    </div>       
<?php endif; ?>
<h4 class="bg-secondary text-white p-2 p-xl-3 text-center text-capitalize mb-0 fw-normal"><?php if(!empty($title)){print $title;}else{print $gallery;};?></h4>
</div>
<?php if($flex_wrapper_close==1):?></div><?php $flex_wrapper_close=0; endif; ?> 