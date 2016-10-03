# Cakephp-3-Token-Auth
Cakephp 3 Token Authentication

# Introduction

This little Custom Authorize Object make possible to login in a CakePHP application usin a token (like Oauth).

# Requirements

* CakePHP 3.x

# Installation

Copy the file into `cakephp-root/src/Auth/` and load the AuthComponent into your `cakephp-root/src/Controller/AppController.php`, using this Object:

```php
$this->loadComponent('Auth',[
    'authenticate'=>[
        'Token'
    ],
    'unauthorizedRedirect' => false,
    'storage' => 'Memory',
]);
```
## Customization

You can customize the Component as you would have done for the FormAuthentication one, like changing the `userModel` config, or the `fields` config