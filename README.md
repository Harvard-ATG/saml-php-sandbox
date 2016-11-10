# saml-php-sandbox

Sandbox for testing SAML with PHP

## Quickstart

1. Start vagrant: `vagrant up`
2. Configure `/etc/hosts`:
    - `127.0.0.1	localhost idp.saml.localhost sp.saml.localhost saml.localhost`
3. Ensure nginx is running: `vagrant ssh -c "sudo service nginx start"`
4. Test servers:
    - Phpinfo: http://saml.localhost:8080/app/phpinfo.php
    - idP: http://idp.saml.localhost:8080/app/index.php
    - idProxy: http://idproxy.saml.localhost:8080/app/index.php
    - SP: http://sp.saml.localhost:8080/app/index.php
5. Access **idP** pages:
    - Front page: http://idp.saml.localhost:8080/simplesaml/module.php/core/frontpage_welcome.php
	- Metadata: http://idp.saml.localhost:8080/simplesaml/saml2/idp/metadata.php
6. Access **SP** protected page which should redirect to login with **idP**:
	- http://sp.saml.localhost:8080/app/protected.php

## Proxy Scenario

This sandbox is used to test a scenario where a **SP** will authenticate with the **idProxy** which will then authenticate with the **idP**. From the POV of the **SP**, the identity provider is the **idProxy**.

The motivation for this scenario is the assumption that we have a number of **SP** instances that need to be created/destroyed on demand, but we do not control the  **idP**. Due to the fact that there's no automated way to synchronize our **SP** instances with the **idP** (i.e. exchange metadata), this step will introduce a manual step in the process with an inherent delay (turnaround could be hours or days).

However, if we setup our own identity provider that acts as a proxy between the service providers and the primary identity provider, then we can automate the synchronization between the service providers and the proxy, and do a one-time sync with the primary identity provider.

The flow in this scenario will look like this:

```plaintext
   Client --> SP --> idProxy --> idP
```

## Configuring SimpleSAMLPHP

### Configuring the Service Provider

Important files:

1. `config/authsources.php`
    - Defines an authentication source. For a service provider, this defines it as an entity that can authenticate against a named identity provider.
2. `metadata/saml20-idp-remote.php`
    - Describes the identity provider referenced in the authentication source with information about the login/logout endpoints and the certificate fingerprint.

Example `config/authsources.php`:

```php
<?php
$config = array(
    'admin' => array('core:AdminPassword'),

    // An authentication source which can authenticate
    // against both SAML 2.0 and Shibboleth 1.3 IdPs.
    'default-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        'entityID' => 'http://sp.saml.localhost:8080',
        'idp' => 'http://idp.saml.localhost:8080/simplesaml/saml2/idp/metadata.php',
        'discoURL' => null,
    )
);
```

Once those two files are configured, you need to **exchange metadata with the idP**, which will instruct the idP on how to communicate or connect with the service provider. It will provide it with information about the logout endpoint and the assertion service that validates the idP's message.

The SP's metadata can be obtained via the **Federation** tab on the installation page.

### Configuring the Identity Provider proxy

### Configuring the Identity Provider
