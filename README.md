# saml-php-sandbox

Sandbox for testing SAML with PHP

## Setup

**Start Vagrant:** `vagrant up`

**Configure /etc/hosts:**

Modify `/etc/hosts` so that `saml-idp.localhost` and `saml-sp.localhost` resolve to the loopback interface `127.0.0.1`:

```
##
# Host Database
127.0.0.1	localhost saml-idp.localhost saml-sp.localhost 
```
