# SecurityTXT
A set of classes to help build a security.txt file in OO manner.
For a more detailed description of the security.txt file please visit: [securitytxt.org](http://securitytxt.org)

## Usages
Build at least the Contact directive:
```php
$contact = new Contact(new Email('test@email.com'), new Phone('1234567890'));
$contact->addCommentLine(new Comment('For security issues please contact us using one of the methods below'));
```

Then create a SecurityTxt object and pass it an output writer implementing the `WriteInterface` (at the moment of writing only NewLine is available):
```php
$document = new SecurityTxt(new NewLine());
$document->addDirective($contact);
```

The last step is to simply cast to string or call __toString():
```php
echo $document->__toStrin();
```

## LICENSE
Please review the LICENSE file