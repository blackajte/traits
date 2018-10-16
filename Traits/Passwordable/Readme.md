PasswordableTrait
=================

for adding password  to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    password :
      type: string
      length: 255
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Passwordable\PasswordableInterface;

class MyClass implements PasswordableInterface
{
	use \Blackajte\TraitsBundle\Traits\Passwordable\PasswordableTrait;
}

```

Now you have password  parameter 'string' in your class
```php

$class = new MyClass();

$class->setPassword($password);

$class->getPassword();//output $password; 

```