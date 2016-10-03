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

## Login action

You may want to login the user to obtain the token (stored in the user array returned): you can call `$this->Auth->identify($this->request,$this->response)` in the `login` action of your `UsersController` controller, like this:

```PHP
public function login(){
	$user = $this->Auth->identify($this->request,$this->response);
	$this->set(compact('user'));
	$this->set('_serialize',['user']);
}
```