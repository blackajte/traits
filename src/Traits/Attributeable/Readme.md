AttributeableTrait
===================

for adding attribute and attributeAt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    attribute:
      type: string
      nullable: true
    attributeAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use Traits\Attributeable\AttributeableInterface;

class MyClass implements AttributeableInterface
{
	use \Traits\Attributeable\AttributeableTrait;
}

```

Now you have attribute and attributeAt parameter 'string' and 'DateTimeInterface' in your class
```php

$class = new MyClass();

$class->setAttribute($attribute);

$class->getAttribute();//output $attribute

$class->setAttributeAt($attributeAt = new DateTime());

$class->getAttributeAt();//output $attributeAt

$class->isAttribute();//output $attributeAt


```

