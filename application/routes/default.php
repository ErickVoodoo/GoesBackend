<?php

Route::set('default', '(<controller>(/<action>(/<id>)))')
->defaults(array(
    'controller' => 'main',
    'action'     => 'index',
));

/*Route::set('main/add', 'main/add(/<id>)', array())
	->defaults();

Route::set('main/count', 'main/count(/<id>)', array())
	->defaults();*/