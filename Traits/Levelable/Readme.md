LevelableTrait
==============

for adding level to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    level:
      type: int
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Levelable\LevelableInterface;

class MyClass implements LevelableInterface
{
	use \Blackajte\TraitsBundle\Traits\Levelable\LevelableTrait;
}

```

Now you have level parameter 'string' in your class
```php

$class = new MyClass();

$class->setLevel($level);

$class->getLevel();//output $level

```