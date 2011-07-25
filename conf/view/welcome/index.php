<?php $writableCache = $request->getAttribute('writable'); ?>
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Welcome</title>
		<base href="<?php echo Aloi_Phruts_Util_ViewUtils::getBaseHref(true); ?>" />
		<link rel="stylesheet" href="css/site.css" type="text/css"/>
	</head>
	<body>
		<div id="header">
            <h1>Welcome.</h1>
        </div>
        <div id="nav">
            <ul>
                <li class="start">
                    <h2>Success!</h2>
                    <p>This page shows that your application is up and running</p>
                </li>
                <li class="logon">
                    <h2>Logon Example</h2>
                    <p>See a simple example of logging a user into your web application</p>
                    <p><a href="index.php/login.action">See example &raquo;</a></p>
                </li>
                <li class="doc">
                    <h2>Learn more</h2>
                    <p>Read the documentation online and get into building your application</p>
                    <p><a href="http://developer.aloi-project.org/wiki/display/aloidocumentation/Welcome">Get reading &raquo;</a></p>
                </li>
            </ul>
        </div>
        <div id="footer">
            <?php if(!$writableCache) { ?>Note: Your cache folder is not writable. Please set WebRoot/WEB-INF/cache folder to be writable by the webserver user.<?php } ?>
        </div>
	</body>
</html>