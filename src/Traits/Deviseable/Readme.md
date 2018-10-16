DeviseableTrait
==============

for adding Devise to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    devise:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Deviseable\DeviseableInterface;

class MyClass implements DeviseableInterface
{
	use \Traits\Deviseable\DeviseableTrait;
}

```

Now you have devise parameter 'string' in your class
```php

$class = new MyClass();

$class->setDevise($devise);

$class->getDevise();//output $devise

```

MontantableTrait
=================

for adding Montant to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    montant:
      type: float
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Deviseable\MontantableInterface;

class MyClass implements MontantableInterface
{
	use \Traits\Deviseable\MontantableTrait;
}

```

Now you have montant parameter 'string' in your class
```php

$class = new MyClass();

$class->setMontant($montant);

$class->getMontant();//output $montant

```


ScalableAmountTrait
=================

for adding scalable Amount to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    scalable:
      type: boolean
    scalableAmount:
      type: float
...........
```

In your Entity
```php
........

use \Traits\Deviseable\ScalableAmountInterface;

class MyClass implements ScalableAmountInterface
{
	use \Traits\Deviseable\ScalableAmountTrait;
}

```

Now you have scalableAmount parameter 'float' in your class
```php

$class = new MyClass();

$class->setScalable(false);
$class->getScalable();//output false
$class->setScalableAmount($scalableAmount);

$class->getScalableAmount();//output $scalableAmount
$class->isScalable();//output true

```