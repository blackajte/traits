EmailableTrait
=================

for adding email to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    email:
      type: string
      length: 255
      nullable: false
...........
```

In your Entity
```php
........

use Traits\Emailable\EmailableInterface;

class MyClass implements EmailableInterface
{
	use \Traits\Emailable\EmailableTrait;
}

```

Now you have email parameter 'string' in your class
```php

$class = new MyClass();

$class->setEmail($email);

$class->getEmail();//output $email

```