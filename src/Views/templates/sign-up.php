<?php $this->layout('template', ['title' => 'Регистрация']) ?>

<div class="container">
    <form action="/regist" method="POST">
    <div class="form-group">
            <label for="exampleInputUsername1">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Регистрация</button>
    </form>
</div>