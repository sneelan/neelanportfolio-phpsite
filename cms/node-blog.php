<?php include '_a_header.php'; ?>
<div class="container-xl">
    <div class="border rounded shadow p-2 p-xl-3 mt-2 mb-3 bg-white">      
  
<?php include 'b-tabs.php'; ?>    
<?php
$post = json_decode(file_get_contents(__DIR__ . '/json/1.json'), true);
?>

        <!-- Featured Image -->
        <img
            src="<?php echo htmlspecialchars($post['featured_image']); ?>"
            class="card-img-top img-fluid"
            alt="<?php echo htmlspecialchars($post['title']); ?>">

        <div class="card-body p-4 p-lg-5">

            <!-- Category -->
            <span class="badge rounded-pill bg-primary fs-6 px-3 py-2 mb-3">
                <?php echo htmlspecialchars($post['category']); ?>
            </span>

            <!-- Title -->
            <h1 class="display-4 fw-bold mt-3 mb-3">
                <?php echo htmlspecialchars($post['title']); ?>
            </h1>

            <!-- Meta -->
            <div class="d-flex flex-wrap gap-3 text-muted fs-6 mb-4">
                <span>
                    ✍️ <strong><?php echo htmlspecialchars($post['author']); ?></strong>
                </span>
                <span>
                    📅 <?php echo htmlspecialchars($post['published_date']); ?>
                </span>
                <?php if ($post['updated_date']): ?>
                    <span>
                        🔄 Updated: <?php echo htmlspecialchars($post['updated_date']); ?>
                    </span>
                <?php endif; ?>
            </div>

            <!-- Body -->
            <div class="fs-5 lh-lg mb-4">
                <?php echo $post['body']; ?>
            </div>

            <!-- Tags -->
            <?php if (!empty($post['tags'])): ?>
                <div class="mb-4">
                    <?php foreach ($post['tags'] as $tag): ?>
                        <span class="badge rounded-pill bg-info-subtle text-info fs-6 me-2 mb-2">
                            #<?php echo htmlspecialchars($tag); ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Keywords -->
            <div class="alert alert-info bg-info bg-opacity-10 border-0 fs-6">
                <strong>Keywords:</strong>
                <?php echo htmlspecialchars(implode(', ', $post['keyword_list'])); ?>
            </div>

            <!-- Settings badges -->
            <div class="d-flex flex-wrap gap-2 mt-3">
                <?php foreach ($post['settings'] as $key => $value): ?>
                    <?php if ($value): ?>
                        <span class="badge bg-success-subtle text-success fs-6">
                            <?php echo ucfirst($key); ?>
                        </span>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php if ($post['frontpage']): ?>
                    <span class="badge bg-warning-subtle text-warning fs-6">
                        Frontpage
                    </span>
                <?php endif; ?>

                <?php if ($post['sticky']): ?>
                    <span class="badge bg-danger-subtle text-danger fs-6">
                        Sticky
                    </span>
                <?php endif; ?>
            </div>

        </div>

        <!-- Footer -->
        <div class="card-footer bg-light p-4 d-flex justify-content-between align-items-center flex-wrap gap-3">

            <span class="text-muted fs-6">
                Status: <strong><?php echo ucfirst($post['published']); ?></strong>
            </span>

            <a href="<?php echo htmlspecialchars($post['url']); ?>"
               class="btn btn-primary btn-lg rounded-pill px-4">
                Read Full Article →
            </a>

        </div>



    
    </div>
</div>
<?php include '_a_footer.php'; ?>