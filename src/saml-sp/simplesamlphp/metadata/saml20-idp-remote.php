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
$metadata['http://idp.saml.localhost:8080/simplesaml/saml2/idp/metadata.php'] = array (
  'entityid' => 'http://idp.saml.localhost:8080/simplesaml/saml2/idp/metadata.php',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp.saml.localhost:8080/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp.saml.localhost:8080/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDtTCCAp2gAwIBAgIJAIQe9C5lygZeMA0GCSqGSIb3DQEBBQUAMEUxCzAJBgNVBAYTAkFVMRMwEQYDVQQIEwpTb21lLVN0YXRlMSEwHwYDVQQKExhJbnRlcm5ldCBXaWRnaXRzIFB0eSBMdGQwHhcNMTYxMDIwMjA1NjA4WhcNMjYxMDIwMjA1NjA4WjBFMQswCQYDVQQGEwJBVTETMBEGA1UECBMKU29tZS1TdGF0ZTEhMB8GA1UEChMYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3vsozQS14zvWwK/kkO6gX+n/RdEnYqbuXK5exrc7VV/zLIJkGWKiz9vleYS45jmv6g5pPJ+begTs6fC6BmVBfz7Ja+cg0YNVAGgSe5EWfyUnOydvVQ7RKAqSiS9xqp4fpqLiNLH/QRtiZakdQ0SbC6J8SmeWtvDdJ2LHGutaswlcn0JTsmCJHJ6f3Ke0badmuz3jtaBt2E5eXmqNAhHGFEBoC/NwcMpVEKbt8JbSz5191+rbTd6qzsWLJGXtWvM7hIYTfRgisN5xxX1EaQ1f8qrVS+g40Jkf2E0qpwj97csHfoZoojN0sa6hpFpeslpebfDpKaCXkaTqBLIHW5JpywIDAQABo4GnMIGkMB0GA1UdDgQWBBSBo4rtEZJ6ecnor8MmWsrMPM+yJjB1BgNVHSMEbjBsgBSBo4rtEZJ6ecnor8MmWsrMPM+yJqFJpEcwRTELMAkGA1UEBhMCQVUxEzARBgNVBAgTClNvbWUtU3RhdGUxITAfBgNVBAoTGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZIIJAIQe9C5lygZeMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBAGP7KoGaAbO0RbAANrZx7RlgUUUsikFeuiKVonbfhZ1znj2SXQH/8spIGKu/iAdquWCykI43GqaI2iajeo8V/Vvf3IPBA0IzTIw6FL59AcMsdBfK5tNjubuhtmk1rGz7Zfvg8i7eNlAFwaroAcRlPGsv/WxP9sG/xN6AEKmR8a9dgdnVIyXcZsHFGEf3Mbmlk3D3oOSacZ0SqrvzX1utIBzoZJxdAc8151hF5WD34amrgtX8Mk9yyTa/6gQyNYo1FTQQp3l28n5bQj2LEmbNcZQ0J2ej7Hv4wkBQ7lmIYKK33WOimt1x6GGklOJTyoGdSDwR8PHSXyfuvEJ0gZCAcmE=',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDtTCCAp2gAwIBAgIJAIQe9C5lygZeMA0GCSqGSIb3DQEBBQUAMEUxCzAJBgNVBAYTAkFVMRMwEQYDVQQIEwpTb21lLVN0YXRlMSEwHwYDVQQKExhJbnRlcm5ldCBXaWRnaXRzIFB0eSBMdGQwHhcNMTYxMDIwMjA1NjA4WhcNMjYxMDIwMjA1NjA4WjBFMQswCQYDVQQGEwJBVTETMBEGA1UECBMKU29tZS1TdGF0ZTEhMB8GA1UEChMYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3vsozQS14zvWwK/kkO6gX+n/RdEnYqbuXK5exrc7VV/zLIJkGWKiz9vleYS45jmv6g5pPJ+begTs6fC6BmVBfz7Ja+cg0YNVAGgSe5EWfyUnOydvVQ7RKAqSiS9xqp4fpqLiNLH/QRtiZakdQ0SbC6J8SmeWtvDdJ2LHGutaswlcn0JTsmCJHJ6f3Ke0badmuz3jtaBt2E5eXmqNAhHGFEBoC/NwcMpVEKbt8JbSz5191+rbTd6qzsWLJGXtWvM7hIYTfRgisN5xxX1EaQ1f8qrVS+g40Jkf2E0qpwj97csHfoZoojN0sa6hpFpeslpebfDpKaCXkaTqBLIHW5JpywIDAQABo4GnMIGkMB0GA1UdDgQWBBSBo4rtEZJ6ecnor8MmWsrMPM+yJjB1BgNVHSMEbjBsgBSBo4rtEZJ6ecnor8MmWsrMPM+yJqFJpEcwRTELMAkGA1UEBhMCQVUxEzARBgNVBAgTClNvbWUtU3RhdGUxITAfBgNVBAoTGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZIIJAIQe9C5lygZeMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBAGP7KoGaAbO0RbAANrZx7RlgUUUsikFeuiKVonbfhZ1znj2SXQH/8spIGKu/iAdquWCykI43GqaI2iajeo8V/Vvf3IPBA0IzTIw6FL59AcMsdBfK5tNjubuhtmk1rGz7Zfvg8i7eNlAFwaroAcRlPGsv/WxP9sG/xN6AEKmR8a9dgdnVIyXcZsHFGEf3Mbmlk3D3oOSacZ0SqrvzX1utIBzoZJxdAc8151hF5WD34amrgtX8Mk9yyTa/6gQyNYo1FTQQp3l28n5bQj2LEmbNcZQ0J2ej7Hv4wkBQ7lmIYKK33WOimt1x6GGklOJTyoGdSDwR8PHSXyfuvEJ0gZCAcmE=',
    ),
  ),
);
