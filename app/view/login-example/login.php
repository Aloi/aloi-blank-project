<?php
// Access the form from the request or create a new one if necessary
$form = Aloi_Phruts_Util_ViewUtils::getFormBean('logonForm', 'Form_LogonForm', 'request', true);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Example</title>
		<base href="<?php echo Aloi_Phruts_Util_ViewUtils::getBaseHref(true); ?>" />
		<link rel="stylesheet" href="css/site.css" type="text/css"/>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="header">
			<h1>Login Form Example</h1>
			<p>Use the username: foo and password: bar</p>
		</div>
		<?php echo Aloi_Phruts_Util_ViewUtils::errors(); ?>
		<form action="<?php echo Aloi_Phruts_Util_ViewUtils::getActionMappingURL('loginProcess'); ?>" method="post">
			<fieldset>
				<label for="username">Username</label>
				<input placeholder="username" name="username" value="<?php echo $form->getUsername(); ?>" id="username" autofocus />
				<label for="password">Password</label>
				<input type="password" name="password" value="" id="password" />
				<input type="submit"/>
			</fieldset>
		</form>
		<p><a href="index.php/index.example">Back to home</a></p>
		<script>
		if (!("autofocus" in document.createElement("input"))) {
		      document.getElementById("username").focus();
	    }
	    </script>
	</body>
</html>
