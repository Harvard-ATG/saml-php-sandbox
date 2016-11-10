<?php

$config = array(
    // This is a authentication source which handles admin authentication.
    'admin' => array('core:AdminPassword'),

    // An authentication source which can authenticate against both SAML 2.0
    // and Shibboleth 1.3 IdPs.
    'saml-proxy' => array(
      'saml:SP',
      'privatekey' => 'saml.pem',
      'certificate' => 'saml.crt',
      'entityID' => 'http://idproxy.saml.localhost:8080',
      'idp' => 'http://idp.saml.localhost:8080/simplesaml/saml2/idp/metadata.php',
      'discoURL' => null,
	),
);
