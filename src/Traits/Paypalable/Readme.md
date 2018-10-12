PaypalableTrait
================

for adding 
    txn_id
    txn_type
    paymentDate
    paymentType
    paymentStatus
to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    txn_id:
      type: string
      nullable: false
    txn_type:
      type: string
      nullable: true
    paymentDate:
      type: datetime
      nullable: true
    paymentType:
      type: string
      nullable: true
    paymentStatus:
      type: string
      nullable: true
...........
```

In your Entity
```php
........

use Traits\Paypalable\PaypalableInterface;

class MyClass implements PaypalableInterface
{
	use \Traits\Paypalable\PaypalableTrait;
}

```

Now you have 
    txn_id
    txn_type
    payment_type
    payment_status
parameter 'string' in your class
AND 
Now you have 
    payment_date
parameter 'DateTime' in your class
```php

$class = new MyClass();

$class->setTxnId($TxnId);
$class->getTxnId();//output $TxnId

$class->setTxnType($TxnType);
$class->getTxnType();//output $TxnType

$class->setPaymentType($PaymentType);
$class->getPaymentType();//output $PaymentType

$class->setPaymentStatus($PaymentStatus);
$class->getPaymentStatus();//output $PaymentStatus


$class->setPaymentDate($PaymentDate);
$class->getPaymentDate();//output $PaymentDate

```
