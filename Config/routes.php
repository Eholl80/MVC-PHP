<?php

	// création d'une route valide utilisée via l'uri 'users/controlregister'
	// (controller: users, fonction à appeler : controlregister)
	Router::addRoute('users/controlregister', 'users/controlregister');
	Router::addRoute('/users/view', 'users/view');
	Router::addRoute('/', 'users/view');
	Router::addRoute('main', 'users/redirectMain');
	Router::addRoute('users/userAdminView', 'users/userAdminView');
	Router::addRoute('users/controlLogin', 'users/controlLogin');
	
	

	// exemples de construction de routes
	//Router::addRoute('', 'articles/viewall');
	//Router::addRoute('user/login', 'users/login');
	//Router::addRoute('user/register', 'users/register');
	// Router::addRoute('user/logout', 'users/logout');

?>
