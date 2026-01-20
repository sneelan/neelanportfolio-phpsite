<?php include 'a-header.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4/dist/masonry.pkgd.min.js"></script>


<?php
$posts = require __DIR__ . '/b-blog-data.php';

$perPage = 15;
$totalPosts = count($posts);
$totalPages = ceil($totalPosts / $perPage);

$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$page = max(1, min($page, $totalPages));

$offset = ($page - 1) * $perPage;
$currentPosts = array_slice($posts, $offset, $perPage);
?>
<?php
$maxPagesToShow = 8;

// Calculate start & end page
$startPage = max(1, $page - floor($maxPagesToShow / 2));
$endPage   = $startPage + $maxPagesToShow - 1;

// Adjust if end exceeds total pages
if ($endPage > $totalPages) {
    $endPage = $totalPages;
    $startPage = max(1, $endPage - $maxPagesToShow + 1);
}
?>
<div class="container-fluid">
    <h3 class="container-xl m-auto bg-dark text-white mb-2 p-2 p-xl-2 text-center rounded-top">BLOG</h3>
    <div class="row" data-masonry='{"percentPosition": true }'>

        <?php foreach ($currentPosts as $post): ?>
            <?php list($title, $date, $image, $slug) = $post; ?>

            <div class="col-sm-6 col-xl-4 mb-4">
                <article class="card p-1 px-lg-3 py-lg-2 shadow-sm">

                    <h5 class="m-0 mb-2">
                        <a target="_blank" class=" text-dark"
                           href="<?php echo $slug; ?>">
                            <?php echo htmlspecialchars($title); ?>
                        </a>
                    </h5>

                    <p class="opacity-75 m-0 mb-2">
                        <?php echo $date; ?>
                        <span class="opacity-50"> | </span>
                        Created by S. Neelakandan
                    </p>

                    <a target="_blank"
                       href="<?php echo $slug; ?>">
                        <img class="img-fluid rounded" height="400" width="660"
                             loading="lazy"
                             src="<?php echo $image; ?>"
                             alt="<?php echo htmlspecialchars($title); ?>">
                    </a>

                    <a target="_blank"
                       href="<?php echo $slug; ?>"
                       class="btn btn-light text-secondary mt-2 w-auto">
                        Read More &gt;
                    </a>

                </article>
            </div>

        <?php endforeach; ?>

    </div>
</div>

<div class="mb-5">
 <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">

        <!-- Prev -->
        <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
            <a class="page-link rounded me-1 fs-5 p-2 p-lg-3"
               href="?page=<?php echo $page - 1; ?>">
                « Prev
            </a>
        </li>

        <!-- Page numbers (max 8) -->
        <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
            <li class="page-item <?php echo ($i === $page) ? 'active' : ''; ?>">
                <a class="page-link rounded me-1 fs-5 p-2 p-lg-3"
                   href="?page=<?php echo $i; ?>">
                    <?php echo $i; ?>
                </a>
            </li>
        <?php endfor; ?>

        <!-- Next -->
        <li class="page-item <?php echo ($page >= $totalPages) ? 'disabled' : ''; ?>">
            <a class="page-link rounded me-1 fs-5 p-2 p-lg-3"
               href="?page=<?php echo $page + 1; ?>">
                Next »
            </a>
        </li>

    </ul>
</nav>
</div>






<?php include 'a-footer.php'; ?>