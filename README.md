# Traits

A collection of traits to build quick and easy entities.

```php
class FooEntity
{
    use IdTrait, CreatedAtTrait, NameTrait, StateTrait;

    public function __construct()
    {
        $this->setCreatedAt(new \DateTimeImmutable());
        $this->setState('init');
    }
}
```

