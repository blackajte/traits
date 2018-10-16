MediaableTrait
==============

for adding parameters (path) to your entity

Example
-------
in your Entity.orm.yml
```php
...........  
  fields:
    path:
      type: string
      length: 255
      nullable: false
...........
```


In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Mediaable\MediaableInterface;

class MyClass implements MediaableInterface
{
	use \Blackajte\TraitsBundle\Traits\Mediaable\MediaableTrait;
}

```

Now you have (path) in your Class
```php

$class = new MyClass();

$class->setPath($path);

$class->getPath();//output $path


```