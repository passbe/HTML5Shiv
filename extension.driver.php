<?php
	
	Class extension_HTML5Shiv extends Extension
	{

		public function getSubscribedDelegates() {
			return array(
				array('page'		=>	'/backend/',
					  'delegate'	=>	'InitaliseAdminPageHead',
					  'callback'	=>	'insertScript'),
			);
		}

        public function insertScript() {
			Administration::instance()->Page->addScriptToHead(URL . '/extensions/html5shiv/assets/html5shiv.js', 40);
        }
		
		
	}

