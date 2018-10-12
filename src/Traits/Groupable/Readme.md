GroupableTrait
==============

for adding localizedGroups to your class with localizedGroups parameters (label, description_short, description_long)

Example
-------
in your Entity.orm.yml
```php
...........
  oneToMany:
    localizedGroups:
      targetEntity: NameSpace\EntityLocalized
      mappedBy: group
      cascade: ["persist","remove"]
...........
```

in your LocalizedEntity.orm.yml
```php
...........
  fields:
    label:
      type: string
      length: 255
      nullable: false
...........
  manyToOne:
    group:
      targetEntity: NameSpace\Entity
      inversedBy: localizedGroups
...........
```

In your Entity
```php
........

use \Traits\Groupable\GroupableInterface;
use \Traits\Groupable\LocalizedGroupableInterface;

class MyClass implements GroupableInterface
{
	use \Traits\Groupable\GroupableTrait;
}

```

In your LocalizedEntity
```php
........

use \Traits\Groupable\LocalizedGroupableInterface;

class MyClassLocalized implements LocalizedGroupableInterface
{
	use \Traits\Groupable\LocalizedGroupableTrait;
}

```

Now you have (label) in your LocalizedClass
linked by localizedGroups in your Class
```php

$class = new MyClass();

$localizedclass = new MyClassLocalized();

$localizedclass->setLabel($label);

$class->addLocalizedGroup($localizedclass);

$localizedGroups = $class->getLocalizedGroups();
foreach($localizedGroups as $localizedGroup) {//Here we have only one localizedGroups	
	$localizedGroup->getLabel();//output $label
}


```