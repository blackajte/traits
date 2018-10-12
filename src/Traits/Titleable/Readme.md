TitleableTrait
==============

for adding title to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    title:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Titleable\TitleableInterface;

class MyClass implements TitleableInterface
{
	use \Traits\Titleable\TitleableTrait;
}

```

Now you have title parameter 'string' in your class
```php

$class = new MyClass();

$class->setTitle($title);

$class->getTitle();//output $title

```