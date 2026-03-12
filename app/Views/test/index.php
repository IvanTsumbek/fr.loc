<div class="container">
    <form action="<?php base_href('/test') ?>" method="post" enctype="multipart/form-data">

        <?=  get_csrf_field(); ?>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name">
        </div>

        <div class="mb-3">
            <label for="my-file" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="my-file" name="my-file">
        </div>

        <div class="mb-3">
            <label for="my-files" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="my-files" name="my-files[]" multiple>
        </div>

        <button type="submit" class="btn btn-warning">Send</button>
    </form>
</div>