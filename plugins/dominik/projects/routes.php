<?php

Route::get('/testroute', function()
{
    return View::make('dominik.projects::test', array('name' => 'Taylor'));
});
