<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
 $metadata['http://idproxy.saml.localhost:8080/simplesaml/saml2/idp/metadata.php'] = array (
   'metadata-set' => 'saml20-idp-remote',
   'entityid' => 'http://idproxy.saml.localhost:8080/simplesaml/saml2/idp/metadata.php',
   'SingleSignOnService' =>
   array (
     0 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
       'Location' => 'http://idproxy.saml.localhost:8080/simplesaml/saml2/idp/SSOService.php',
     ),
   ),
   'SingleLogoutService' =>
   array (
     0 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
       'Location' => 'http://idproxy.saml.localhost:8080/simplesaml/saml2/idp/SingleLogoutService.php',
     ),
   ),
   'certData' => 'MIIDXTCCAkWgAwIBAgIJAPx686L685FsMA0GCSqGSIb3DQEBBQUAMEUxCzAJBgNVBAYTAkFVMRMwEQYDVQQIDApTb21lLVN0YXRlMSEwHwYDVQQKDBhJbnRlcm5ldCBXaWRnaXRzIFB0eSBMdGQwHhcNMTYxMTEwMTkzNTI3WhcNMjYxMTEwMTkzNTI3WjBFMQswCQYDVQQGEwJBVTETMBEGA1UECAwKU29tZS1TdGF0ZTEhMB8GA1UECgwYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAw/M1EH1F7l2f4dryaMWWQo4jHl9Wjjc/MGmNRCKaJf0dXtSvk+Y6R3TDCPR/ibuTHr/sxWd/kvBP8pnwrEA7Ilhrs+pa+z6AJVoJp+XGePmt7QTSxdYyg/ume8f+WozgQ1AYZYgCv64H7mu9z4W7vay/Gssr9tSCqjCHQk9lOqbGCOFI1avd/wMVnYHob7saw/84l8ynt/ZNMV/xycgh8RtbgogTXbjdRedMTgYNgZovckl0l8plZ9qRja9KhjR4CvYhWbWA96CFw+ZLVQHdUU4+OqYHZJM8P5g/Jgf0rDI1++bVrBlhyxMLs2VDX/qmOsPDAXtspBrMfP5no6fJuQIDAQABo1AwTjAdBgNVHQ4EFgQUBCpW4846EPLX7FE+Dtyx2t/4o4owHwYDVR0jBBgwFoAUBCpW4846EPLX7FE+Dtyx2t/4o4owDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOCAQEAhSdHg86kCLFoBVU6k69ho0cALO8de2yfcykLBCKYH0B1vy8M4mG0TjyjU5ypENWGZ+HDRfkd8/ljWtvdAAf0LFbeVbw3AbtIm0UlxOgjiKG/Jn7J9JDKMvMcH9bz695r6ZXe9YXes9ndDhFB6B7JiDhxCAFT9P6BJA9WK4Baxe5D6b+JK+RRcazyv8Qz+gh2QyfxVQGHAY7yQWf+D+b8g3z96Q0XRRPpeCSvrEB0LyWvgIoYZA5I/88pPLYXLVv3wRD4h5gAeSR8vWRQeL4IfXhcBcpE+JWFZ1dhhUmJsPr8pVfS13oTkdTjjGcB03gYYasn9jkTZSO+/3J08kCTqg==',
   'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
 );
