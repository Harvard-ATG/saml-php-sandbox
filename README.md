# saml-php-sandbox

Sandbox for testing SAML with PHP

## Setup

**Start Vagrant:** `vagrant up`

**Configure /etc/hosts:**

Modify `/etc/hosts`: 

```
##
# Host Database
127.0.0.1	localhost idp.saml.localhost sp.saml.localhost saml.localhost
```

**IDP Metadata**:

- http://idp.saml.localhost:8080/simplesamlphp/www/saml2/idp/metadata.php