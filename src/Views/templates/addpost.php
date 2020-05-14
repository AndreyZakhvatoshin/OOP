<?php $this->layout('template', ['title' => 'Добавить запись']) ?>

<div class="container">
    <form action="/create-post" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Заголовок</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Заголовок">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Текст</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить запись</button>
    </form>
</div>