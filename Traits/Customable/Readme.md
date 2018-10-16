CustomableTrait
==============

for adding custom to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    custom:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Customable\CustomableInterface;

class MyClass implements CustomableInterface
{
	use \Blackajte\TraitsBundle\Traits\Customable\CustomableTrait;
}

```

Now you have custom parameter 'string' in your class
```php

$class = new MyClass();

$class->setCustom($custom);

$class->getCustom();//output $custom

```