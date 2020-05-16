<?php $this->layout('template', ['title' => 'Все записи'])?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        
        </div>
        <div class="col-md-8">
        <?php foreach($posts as $post): ?>
            <h3><?= $post['title']; ?></h3>
            <p><?= $post['content']; ?></p>
        <?php endforeach; ?>
        </div>
        <div class="col-md-2">
            <a href="/posts/add">Добавить запись</a>
        </div>
    </div>
</div>