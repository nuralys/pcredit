<?php

	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
	Router::connect('/admin/models/add', array('controller' => 'childmodels', 'action' => 'add', 'admin' => true));
	Router::connect('/admin/models/edit/*', array('controller' => 'childmodels', 'action' => 'edit', 'admin' => true));
	
	Router::connect('/search', array('controller' => 'products', 'action' => 'search'));

	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/news/*', array('controller' => 'news', 'action' => 'view'));
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	Router::connect('/autolombard', array('controller' => 'pages', 'action' => 'autolombard'));
	Router::connect('/contacts', array('controller' => 'pages', 'action' => 'contacts'));
	Router::connect('/realty', array('controller' => 'pages', 'action' => 'realty'));
	Router::connect('/credit/get', array('controller' => 'credits', 'action' => 'get'));
	Router::connect('/credit', array('controller' => 'credits', 'action' => 'index'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'index'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
