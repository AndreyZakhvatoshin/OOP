<?php

use Delight\Auth\Auth;

function auth()
{
    global $container;
    return $container->get(Auth::class);
}
