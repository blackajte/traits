BodyableTrait
=================

for adding body to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    body:
      type: string
      length: 255
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Bodyable\BodyableInterface;

class MyClass implements BodyableInterface
{
    protected $body = null;
	use \Blackajte\TraitsBundle\Traits\Bodyable\BodyableTrait;
}

```

Now you have body parameter 'string' in your class
```php

$class = new MyClass();

$class->setBody($body);

$class->getBody();//output $body

```