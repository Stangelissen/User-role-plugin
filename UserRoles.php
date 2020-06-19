<?php
/*
Plugin Name: User roles plugin
Description: User roles plugin
Version:     0.1
Author:      Stan Gelissen
*/



// Add a custom user role

function gebruikers_roles_toevoegen() {
	$account_rol_namen = array("Marketeer");

	// Gebruikersrollen toevoegen
	foreach ($account_rol_namen as $account_rol_naam) {
		if (empty(get_role($account_rol_naam))) {
			add_role($account_rol_naam, $account_rol_naam, array());
			
		}
		
	}

}
register_activation_hook(__FILE__, "gebruikers_roles_toevoegen");





?>