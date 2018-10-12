VoteableTrait
===================

for adding type to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    vote:
      type: integer
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Voteable\VoteableInterface;

class MyClass implements VoteableInterface
{
	use \Traits\Voteable\VoteableTrait;
}

```

Now you have vote parameter 'integer' in your class
```php

$class = new MyClass();

$class->setVote($vote);

$class->getVote();//output $vote

$class->addVote($vote);
$class->voteTakeOff($vote);

```


VoteBonusableTrait
===================

for adding voteBonus to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    voteBonus:
      type: integer
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Voteable\VoteBonusableInterface;

class MyClass implements VoteBonusableInterface
{
	use \Traits\Voteable\VoteBonusableTrait;
}

```

Now you have voteBonus parameter 'integer' in your class
```php

$class = new MyClass();

$class->setVoteBonus($Bonus);

$class->getVoteBonus();//output $Bonus

$class->addVoteBonus($Bonus);
$class->voteBonusTakeOff($Bonus);

```


VoteBonusPersoableTrait
===================

for adding voteBonusPerso to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    voteBonusPerso:
      type: integer
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Voteable\VoteBonusPersoableInterface;

class MyClass implements VoteBonusPersoableInterface
{
	use \Traits\Voteable\VoteBonusPersoableTrait;
}

```

Now you have voteBonusPerso parameter 'integer' in your class
```php

$class = new MyClass();

$class->setVoteBonusPerso($BonusPerso);

$class->getVoteBonusPerso();//output $BonusPerso

$class->addVoteBonusPerso($BonusPerso);
$class->voteBonusPersoTakeOff($BonusPerso);

```