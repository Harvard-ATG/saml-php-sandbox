<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
 $metadata['http://sp.saml.localhost:8080'] = array(
 	'AssertionConsumerService' => 'http://sp.saml.localhost:8080/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
 	'SingleLogoutService'      => 'http://sp.saml.localhost:8080/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
 );
