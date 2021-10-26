<h2 class="text-center text-primary"><?= esc($title) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>
<?=base_url().'/assets/'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form class="form" action="/news/create" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="input" name="title" /><br />
    </div>
    <div class="form-group">
        <label for="body">Text</label>
        <textarea class="form-control" name="body"></textarea><br />
    </div>
    

    <input class="form-control" type="submit" name="submit" value="Create news item" />
</form>
        </div>
    </div>
<div>