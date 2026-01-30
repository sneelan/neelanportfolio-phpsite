<?php session_start(); include '_a_header.php'; ?>
<div class="container-xl ">
    <div class="bg-light border rounded shadow p-2 p-xl-3 mt-2 mb-3 ">
<?php include 'b-tabs.php'; ?> 
       <?php

$jsonDir = __DIR__ . '/json';

/* ===========================
   MODE DETECTION
=========================== */
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$isEdit = ($id > 0);

/* ===========================
   LOAD OR INIT POST
=========================== */
if ($isEdit) {
    $file = $jsonDir . '/' . $id . '.json';
    if (!file_exists($file)) {
        die('Post not found');
    }
    $post = json_decode(file_get_contents($file), true);
} else {
    // ADD NEW DEFAULTS
    $post = [
        'id' => 0,
        'title' => '',
        'url' => '',
        'category' => '',
        'tags' => [],
        'keyword' => '',
        'keyword_list' => [],
        'featured_image' => '',
        'meta_thumbnail' => '',
        'body' => '',
        'related_posts' => [],
        'related_links' => [],
        'settings' => ['ads'=>false,'sponsor'=>false,'beautiful'=>false],
        'author' => '',
        'published_date' => '',
        'updated_date' => '',        
        'sticky' => false,
        'frontpage' => false,
        'published' => true
    ];
}

/* ===========================
   DATE HELPERS
=========================== */
function toDBDate($d) {
    $dt = DateTime::createFromFormat('d-m-Y', $d);
    return $dt ? $dt->format('Y-m-d') : '';
}
function toFormDate($d) {
    return $d ? date('d-m-Y', strtotime($d)) : '';
}

/* ===========================
   SAVE FORM
=========================== */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Generate ID for new post
    if (!$isEdit) {
        $files = glob($jsonDir . '/*.json');
        $ids = array_map(fn($f) => (int)basename($f, '.json'), $files);
        $id = $ids ? max($ids) + 1 : 1;
        $post['id'] = $id;
        $file = $jsonDir . '/' . $id . '.json';
    }

    // simple helper for date
    function formatDate($date) {
        $d = DateTime::createFromFormat('d-m-Y', $date);
        return $d ? $d->format('Y-m-d') : '';
    }

    $post['title'] = $_POST['title'];
    $post['url'] = $_POST['url'];
    $post['category'] = $_POST['category'];
    $post['tags'] = array_map('trim', explode(',', $_POST['tags']));
    $post['keyword'] = $_POST['keyword'];
    $post['keyword_list'] = array_map('trim', explode(',', $_POST['keyword_list']));
    $post['body'] = $_POST['body'];
    $post['author'] = $_POST['author'];
    $post['published_date'] = formatDate($_POST['published_date']);
    $post['updated_date'] = formatDate($_POST['updated_date']);
    $post['published'] = $_POST['published'];
    $post['sticky'] = isset($_POST['sticky']);
    $post['frontpage'] = isset($_POST['frontpage']);

    // settings (multi select)
    $post['settings'] = [
        'ads' => in_array('ads', $_POST['settings'] ?? []),
        'sponsor' => in_array('sponsor', $_POST['settings'] ?? []),
        'beautiful' => in_array('beautiful', $_POST['settings'] ?? [])
    ];

// Featured image upload
if (!empty($_FILES['featured_image']['name'])) {
    $target = 'uploads/' . basename($_FILES['featured_image']['name']);
    move_uploaded_file($_FILES['featured_image']['tmp_name'], $target);
    $post['featured_image'] = $target;
}

// Meta thumbnail upload
if (!empty($_FILES['meta_thumbnail']['name'])) {
    $target = 'uploads/' . basename($_FILES['meta_thumbnail']['name']);
    move_uploaded_file($_FILES['meta_thumbnail']['tmp_name'], $target);
    $post['meta_thumbnail'] = $target;
}

    file_put_contents($file, json_encode($post, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    $_SESSION['saved'] = true;
    header('Location: edit-blog?id=' . $id);
    exit;
    $saved = true;
}

/* ===========================
   DATE FORMAT FOR FORM
=========================== */
function displayDate($date) {
    return $date ? date('d-m-Y', strtotime($date)) : '';
}
?>

<div class="container my-2">
    <h2 class="m-0 mb-4"><?= $isEdit ? '✏️ Edit Blog Post' : '➕ Add New Blog Post' ?></h2>

<?php if (!empty($_SESSION['saved'])): ?>
    <div class="alert alert-success">Post saved successfully.</div>
    <?php unset($_SESSION['saved']); ?>
<?php endif; ?>

    <form method="post" enctype="multipart/form-data">

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <div class="input-group">
                <span class="input-group-text">📝</span>
                <input type="text" class="form-control" name="title"
                       value="<?php echo htmlspecialchars($post['title']); ?>">
            </div>
        </div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Category</label>
        <input type="text" class="form-control" name="category" value="<?php echo htmlspecialchars($post['category']); ?>">
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Tags (comma separated)</label>
        <input type="text" class="form-control" name="tags" value="<?php echo htmlspecialchars(implode(', ', $post['tags'])); ?>">
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Primary Keyword</label>
        <input type="text" class="form-control" name="keyword" value="<?php echo htmlspecialchars($post['keyword']); ?>">
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Keyword List</label>
        <input type="text" class="form-control" name="keyword_list" value="<?php echo htmlspecialchars(implode(', ', $post['keyword_list'])); ?>">
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Featured Image</label>
        <div class="mb-2"><img src="<?php echo $post['featured_image']; ?>" class="img-thumbnail" width="200"></div>
        <input type="file" class="form-control" name="featured_image">
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Meta Thumbnail</label>
        <div class="mb-2"><img src="<?= htmlspecialchars($post['meta_thumbnail']) ?>" class="img-thumbnail" width="200"></div>
        <input type="file" class="form-control" name="meta_thumbnail">
    </div>
</div>


        <!-- Body -->
        <div class="mb-3">
            <label class="form-label">Body</label>
            <textarea class="form-control" rows="6" name="body"><?php echo htmlspecialchars($post['body']); ?></textarea>
        </div>



        <!-- Settings -->
        <div class="mb-3">
            <label class="form-label">Settings</label>
            <select class="form-select" name="settings[]" multiple>
                <?php foreach ($post['settings'] as $k => $v): ?>
                    <option value="<?php echo $k; ?>" <?php echo $v ? 'selected' : ''; ?>>
                        <?php echo ucfirst($k); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Dates -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Published Date (DD-MM-YYYY)</label>
                <input type="text" class="form-control" name="published_date"
                       value="<?php echo displayDate($post['published_date']); ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Updated Date (DD-MM-YYYY)</label>
                <input type="text" class="form-control" name="updated_date"
                       value="<?php echo displayDate($post['updated_date']); ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" name="author"
                   value="<?php echo htmlspecialchars($post['author']); ?>">
            </div>
        </div>

        <!-- Checkboxes -->
        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" name="frontpage" <?php echo $post['frontpage'] ? 'checked' : ''; ?>>
            <label class="form-check-label">Show on Frontpage</label>
        </div>

        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" name="sticky" <?php echo $post['sticky'] ? 'checked' : ''; ?>>
            <label class="form-check-label">Sticky Post</label>
        </div>
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" name="published" <?php echo $post['published'] ? 'checked' : ''; ?>>
    <label class="form-check-label">Published</label>
</div>
        <!-- URL -->
        <div class="mb-3">
            <label class="form-label">URL Slug</label>
            <div class="input-group">
                <span class="input-group-text">🔗</span>
                <input type="text" class="form-control" name="url"
                       value="<?php echo htmlspecialchars($post['url']); ?>">
            </div>
        </div>
        <!-- Save -->
        <button class="btn btn-primary btn-lg">💾 Save Changes</button>
    </form>
</div>
    </div>
</div>

<style>
    label{font-weight: bold;}
    .bg-light{background-color:#e5e5e5!important;}
</style>
<?php include '_a_footer.php'; ?>