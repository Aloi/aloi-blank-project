<?php
/**
 * Simple example servlet which processes a PHP view from the server
 * @author camm
 */
class Servlet_Welcome extends Aloi_Serphlet_Http_Servlet {
	public function doGet(Aloi_Serphlet_Http_Request $request, Aloi_Serphlet_Http_Response $response) {
		// Look at what the path is and load the file
		$path = $request->getPathInfo();
		if($path == '/') $path = '/index';
		
		// Check the cache directory
		$request->setAttribute('writable', is_writable(Aloi_Serphlet_Host::getCacheDirectory()));
		
		// Draw the page
		$template = $this->getTemplateFile($path);
		if(is_readable($template)) {
			// Service using the request dispatcher
			$this->getServletConfig()->getServletContext()->getRequestDispatcher($template)->doForward($request, $response);
		} else {
			// Return Status Code HTTP Not Found
			$response->sendError(Aloi_Serphlet_Application_HttpResponse::SC_NOT_FOUND, 'Could not locate the requested resource');
		}
	}
	
	/**
	 */
	private function getTemplateFile($path) {
		// Locate the view directory
		$templateConfigValue = $this->getServletConfig()->getInitParameter('templates');
		if(!empty($templateConfigValue)) {
			// Use the template directory
			$templateDirectory = $templateConfigValue;
		} else {
			// Set the default
			$templateDirectory = 'WEB-INF/view/welcome';
		}
		
		// Return the template
		return  $templateDirectory . $path . '.php';
	}
}