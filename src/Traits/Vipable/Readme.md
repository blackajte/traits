VipableTraitInterfaceTrait
==============

for adding type to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    vipType:
      type: integer
      nullable: true
    vipEndAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Traits\VipableTraitInterface\VipableTraitInterfaceInterface;

class MyClass implements VipableTraitInterfaceInterface
{
	use \Traits\VipableTraitInterface\VipableTraitInterfaceTrait;
}

```

Now you have vipType and vipEndAt parameter 'int' and 'DateTime' in your class
```php

$class = new MyClass();

$class->setVipType($vipType);

$class->getVipType();//output $vipType

$class->setVipEndAt($vipEndAt);

$class->getVipEndAt();//output $vipEndAt

```