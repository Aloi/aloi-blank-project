<?php
class Action_LogonAction extends Aloi_Phruts_Action {
	const VALID_USERNAME = 'foo';
	const VALID_PASSWORD = 'bar';
	
	function execute(Aloi_Phruts_Config_Action $mapping, $form, Aloi_Serphlet_Http_Request $request, Aloi_Serphlet_Http_Response $response) {

		// Check the username and password
		if($form->getUsername() != self::VALID_USERNAME || $form->getPassword() != self::VALID_PASSWORD) {
			// Create our errors collection for our validation errors
			$errors = new Aloi_Phruts_Action_Errors();
			$errors->add('action', new Aloi_Phruts_Action_Error('logon.invalid'));
			$this->addErrors($request, $errors);
			return $mapping->findForwardConfig('failure');
		}

		// Look up where to go based on a successful action
		return $mapping->findForwardConfig('success');
	}
	
}