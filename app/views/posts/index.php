<?php
require APPROOT . '/views/inc/header.php';
?>
<div class="row mt-5">
    <div class="col-md-6">
        <h1>Posts</h1>
    </div>
    <div class="col-md-6">
        <a href="<?= URLROOT; ?>/posts/add" class="btn btn-primary float-md-end">
    <i class="fa fa-pencil"></i> Add Posts
    </a>
    </div>
</div>

<?php
require APPROOT . '/views/inc/footer.php';
?>