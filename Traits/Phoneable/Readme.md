PhoneableTrait
==============

for adding phone to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    phone:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Phoneable\PhoneableInterface;

class MyClass implements PhoneableInterface
{
	use \Blackajte\TraitsBundle\Traits\Phoneable\PhoneableTrait;
}

```

Now you have phone parameter 'string' in your class
```php

$class = new MyClass();

$class->setPhone($phone);

$class->getPhone();//output $phone

```