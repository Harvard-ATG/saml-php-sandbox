<?php
require_once('../simplesamlphp/lib/_autoload.php');
#print "<pre>";print_r($_SERVER);print "</pre>";exit(1);
$as = new SimpleSAML_Auth_Simple('saml-proxy');
$as->requireAuth();
$attributes = $as->getAttributes();
print_r($attributes);

