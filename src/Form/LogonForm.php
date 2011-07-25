<?php
class Form_Logon extends Aloi_Phruts_Action_Form {
	// Form vars
	private $username;
	private $password;

	/**
	 * Check that the form values are valid before continuing
	 */
	public function validate() {
		// Create our errors collection for our validation errors
		$errors = new Aloi_Phruts_Action_Errors();

		// Get the form variables
		$username = $this->getUsername();
		$password = $this->getPassword();
		
		// Check that the username is present
		if(!trim($username)) {
			// Username not present
			$errors->add('username', new Aloi_Phruts_Action_Error('username.required'));
		}
		
		if(!trim($password)) {
			// Password not present
			$errors->add('password', new Aloi_Phruts_Action_Error('password.required'));
		}

		// If there were errors, return them
		if(!$errors->isEmpty()) return $errors;
		else return null; // Return null if no errors
	}
	
	
	// Mutators Methods
	public function setUsername($username) {
		$this->username = $username;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
	
	// Accessor Methods
	public function getUsername() {
		return $this->username;
	}
	public function getPassword() {
		return $this->password;
	}
}