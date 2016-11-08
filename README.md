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

### Configuring the Identity Provider proxy

### Configuring the Identity Provider
