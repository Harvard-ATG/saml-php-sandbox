<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
/*
$metadata['http://sp.saml.localhost:8080'] = array(
	'AssertionConsumerService' => 'http://sp.saml.localhost:8080/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
	'SingleLogoutService'      => 'http://sp.saml.localhost:8080/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
);
 */

/*
 * This example shows an example config that works with Google Apps for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address
 * at Google Apps. In example, if your google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
/*
$metadata['google.com'] = array(
	'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
	'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
	'simplesaml.nameidattribute' => 'uid',
	'simplesaml.attributes' => FALSE,
);
 */
 $metadata['http://idproxy.saml.localhost:8080'] = array (
   'SingleLogoutService' =>
   array (
     0 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
       'Location' => 'http://idproxy.saml.localhost:8080/simplesaml/module.php/saml/sp/saml2-logout.php/saml-proxy',
     ),
   ),
   'AssertionConsumerService' =>
   array (
     0 =>
     array (
       'index' => 0,
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
       'Location' => 'http://idproxy.saml.localhost:8080/simplesaml/module.php/saml/sp/saml2-acs.php/saml-proxy',
     ),
     1 =>
     array (
       'index' => 1,
       'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
       'Location' => 'http://idproxy.saml.localhost:8080/simplesaml/module.php/saml/sp/saml1-acs.php/saml-proxy',
     ),
     2 =>
     array (
       'index' => 2,
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
       'Location' => 'http://idproxy.saml.localhost:8080/simplesaml/module.php/saml/sp/saml2-acs.php/saml-proxy',
     ),
     3 =>
     array (
       'index' => 3,
       'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
       'Location' => 'http://idproxy.saml.localhost:8080/simplesaml/module.php/saml/sp/saml1-acs.php/saml-proxy/artifact',
     ),
   ),
   'certData' => 'MIIDXTCCAkWgAwIBAgIJAPx686L685FsMA0GCSqGSIb3DQEBBQUAMEUxCzAJBgNVBAYTAkFVMRMwEQYDVQQIDApTb21lLVN0YXRlMSEwHwYDVQQKDBhJbnRlcm5ldCBXaWRnaXRzIFB0eSBMdGQwHhcNMTYxMTEwMTkzNTI3WhcNMjYxMTEwMTkzNTI3WjBFMQswCQYDVQQGEwJBVTETMBEGA1UECAwKU29tZS1TdGF0ZTEhMB8GA1UECgwYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAw/M1EH1F7l2f4dryaMWWQo4jHl9Wjjc/MGmNRCKaJf0dXtSvk+Y6R3TDCPR/ibuTHr/sxWd/kvBP8pnwrEA7Ilhrs+pa+z6AJVoJp+XGePmt7QTSxdYyg/ume8f+WozgQ1AYZYgCv64H7mu9z4W7vay/Gssr9tSCqjCHQk9lOqbGCOFI1avd/wMVnYHob7saw/84l8ynt/ZNMV/xycgh8RtbgogTXbjdRedMTgYNgZovckl0l8plZ9qRja9KhjR4CvYhWbWA96CFw+ZLVQHdUU4+OqYHZJM8P5g/Jgf0rDI1++bVrBlhyxMLs2VDX/qmOsPDAXtspBrMfP5no6fJuQIDAQABo1AwTjAdBgNVHQ4EFgQUBCpW4846EPLX7FE+Dtyx2t/4o4owHwYDVR0jBBgwFoAUBCpW4846EPLX7FE+Dtyx2t/4o4owDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOCAQEAhSdHg86kCLFoBVU6k69ho0cALO8de2yfcykLBCKYH0B1vy8M4mG0TjyjU5ypENWGZ+HDRfkd8/ljWtvdAAf0LFbeVbw3AbtIm0UlxOgjiKG/Jn7J9JDKMvMcH9bz695r6ZXe9YXes9ndDhFB6B7JiDhxCAFT9P6BJA9WK4Baxe5D6b+JK+RRcazyv8Qz+gh2QyfxVQGHAY7yQWf+D+b8g3z96Q0XRRPpeCSvrEB0LyWvgIoYZA5I/88pPLYXLVv3wRD4h5gAeSR8vWRQeL4IfXhcBcpE+JWFZ1dhhUmJsPr8pVfS13oTkdTjjGcB03gYYasn9jkTZSO+/3J08kCTqg==',
 );
