ValueableTrait
==============

for adding value;  to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    json; :
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Jsonable\JsonableInterface;

class MyClass implements JsonableInterface
{
	use \Traits\Jsonable\JsonableTrait;
}

```

Now you have json;  parameter 'string' in your class
```php

$class = new MyClass();

$class->setJson($json);

$class->getJson();//output $json; 

```