# saml-php-sandbox

Sandbox for testing SAML with PHP

## Setup

1. Start vagrant: `vagrant up`
2. Configure `/etc/hosts`: 
    - `127.0.0.1	localhost idp.saml.localhost sp.saml.localhost saml.localhost`
3. Ensure nginx is running: `vagrant ssh -c "sudo service nginx start"`
4. Test servers:
    - http://saml.localhost:8080/app/phpinfo.php
    - http://idp.saml.localhost:8080/app/index.php
    - http://sp.saml.localhost:8080/app/index.php
5. Access **idP** pages:
    - Front page: http://idp.saml.localhost:8080/simplesaml/module.php/core/frontpage_welcome.php
	- Metadata: http://idp.saml.localhost:8080/simplesaml/saml2/idp/metadata.php
6. Access **SP** protected page which should redirect to login with **idP**:
	- http://sp.saml.localhost:8080/app/protected.php

