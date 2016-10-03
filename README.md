# Cakephp-2-Token-Auth
Cakephp 2 Token Authentication

# Introduction

This little Custom Authorize Object make possible to login in a CakePHP application usin a token (like Oauth). This one is the branch for CakePHP 2.x.

# Requirements

* CakePHP 2.x

# Installation

Copy the file into `cakephp-root/app/Controller/Component/Auth` and load the AuthComponent into your `cakephp-root/app/Controller/AppController.php`, using this Object:

```php
public $components = [
	'...',
	'Auth'=>[
		'authenticate'=>'Token',
		'unauthorizedRedirect'=>false
	]
];
```
## Customization

You can customize the Component as you would have done for the FormAuthentication one, like changing the `userModel` config, or the `fields` config