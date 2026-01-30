<div class="border border-3 border-secondary rounded d-inline-block mb-3">
    <h3 class="bg-secondary text-white p-2 pb-3 text-center text-capitalize fw-normal"><?php if(!empty($title)){print $title;}else{print $gallery;};?></h3>
<div class="d-flex flex-wrap align-items-start justify-content-center gap-3 mb-3">        
    <?php $images = file(__DIR__ . '/data/'. $gallery.'.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>
    <?php foreach ($images as $img): ?>        
        <?php $alt = pathinfo($img, PATHINFO_FILENAME); // remove extension
            $alt = str_replace('-', ' ', $alt);       // replace hyphens with space
            $alt = trim($alt);  ?>        
        <div class="popup-img cursor bg-white shadow-sm p-1 rounded">
            <div style="width:300px;height:300px;overflow-hidden;">
            <?php if(!empty($thumbnail) && $thumbnail==1){$small='small/';}else{ $small=null;} ?>
        <img 
            src="content/works/<?php print $gallery;?>/<?php print $small;?><?php print $img; ?>" 
            style="object-fit: cover;object-position: top center;cursor: pointer; width:100%;height:100%;"
             class="rounded "
            loading="lazy">
             </div>
        </div>                   
    <?php endforeach; ?>   
</div>
</div>