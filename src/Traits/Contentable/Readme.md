ContentableTrait
==================

for adding content to your class

Example Content
--------------------
in your Entity.orm.yml
```php
...........
fields:
    content:
      type: text
      nullable: true
...........
```

In your Entity
```php
........

use \Traits\Descripteable\DescripteableInterface;

class MyClass implements DescripteableInterface
{
	use \Traits\Descripteable\DescripteableTrait;
}

```

Now you have content parameter 'text' in your class
```php

$class = new MyClass();

$class->setContent($content);

$class->getContent();//output $content

```
