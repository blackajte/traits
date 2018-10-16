SkuableTrait
============

for adding sku to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    sku:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Skuable\SkuableInterface;

class MyClass implements SkuableInterface
{
	use \Blackajte\TraitsBundle\Traits\Skuable\SkuableTrait;
}

```

Now you have sku parameter 'string' in your class
```php

$class = new MyClass();

$class->setSku($sku);

$class->getSku();//output $sku string

```