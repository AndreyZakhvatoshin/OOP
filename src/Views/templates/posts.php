<?php $this->layout('template', ['title' => 'Все записи'])?>

    <div class="row">
        <div class="col-md-8">
        <?php foreach($posts as $post): ?>
            <h3><?= $post['title']; ?></h3>
            <p><?= $post['content']; ?></p>
        <?php endforeach; ?>
        </div>
        <div class="col-md-2">
            <?= $this->insert('post-sidebar'); ?>
        </div>
    </div>