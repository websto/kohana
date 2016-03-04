<?php 
if (!Route::cache()) {

    Route::set('admin_leks', 'admin_leks(/<controller>(/<action>(/<id>)))')
       ->defaults(array(
       'directory'  => 'admin',
       'controller' => 'user',
       'action'     => 'login',
     ));

    Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+'))
       ->defaults(array(
       'controller' => 'error',
     ));


    Route::set('news', '<id>/<news>/<artname>', array('id' => '[0-9]+'), array('artname' => '.+'))
        ->defaults(array(
        'controller' => 'news',
        'action'     => 'index',
    ));

    Route::set('cat', '<categories>/<id>/<artname>(/<page>)',array('id' => '[0-9]+'),array('artname' => '.+'),array('page' => '[0-9]+'))
    ->defaults(array(
       'controller' => 'categ',
       'action'     => 'cat',
    ));


    Route::set('newsall', '<artname>(/<page>)',  array('artname' => 'News'), array('page' => '[0-9]+'))
        ->defaults(array(
        'controller' => 'news',
        'action'     => 'all',
    ));

    Route::set('cart', '<id>', array('id' => '[0-9]+'))
        ->defaults(array(
            'controller' => 'cart',
            'action'     => 'items_count',
        ));

   Route::set('part', '<id>/<artname>', array('id' => '[0-9]+'), array('artname' => '.+'))
    ->defaults(array(
    'controller' => 'part',
    'action'     => 'part',
     ));

    Route::set('user', 'user(<controller>(/<action>(/<id>)))')
        ->defaults(array(
        'controller' => 'user',
        'action'     => 'index',
    ));

    Route::set('do_search', 'search(/<artname>)', array('artname' => '.*'))
    ->defaults(array(
    'controller'  => 'search',
    'action' => 'search',
        ));

    Route::set('comparison', '<action>', array('action' => 'comparison'))
        ->defaults(array(
        'controller'  => 'comparison',
    ));

    Route::set('static', '<action>', array('action' => 'contacts|about|gallery'))
    ->defaults(array(
    'controller' => 'static',
      ));

   Route::set('home', '(<page>)',array('page' => '[0-9]+'))
    ->defaults(array(
    'controller' => 'home',
    'action'     => 'index',
    ));

   Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));

    Route::cache(Kohana::$environment === Kohana::PRODUCTION);    }