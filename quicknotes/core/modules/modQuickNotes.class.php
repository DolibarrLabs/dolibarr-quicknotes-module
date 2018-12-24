<?php

// Load Dolibase
dol_include_once('quicknotes/autoload.php');

// Load Dolibase Module class
dolibase_include_once('core/class/module.php');

/**
 *	Class to describe and enable module
 */
class modQuickNotes extends DolibaseModule
{
	/**
	 * Function called after module configuration.
	 * 
	 */
	public function loadSettings()
	{
		$this->addJsFile('quicknotes.js.php');
		$this->enableHooks(array(
			'toprightmenu',
			'main',
			'login'
		));
	}
}
