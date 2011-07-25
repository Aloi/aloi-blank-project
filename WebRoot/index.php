<?php

// Handle the request
Aloi_Serphlet_Host::addConfigurationFile('../app/web.xml');
Aloi_Serphlet_Host::setCacheDirectory('../app/cache');
Aloi_Serphlet_Host::process(dirname(__FILE__));