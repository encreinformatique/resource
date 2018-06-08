# Resource

This repository groups a serie of common PHP traits and interfaces.

## SQLFilters

### Configuration and Usage for CountryFilter

1. Configuration in doctrine.yaml
```
doctrine:
    orm:
        filters:
            country: EncreInformatique\Component\Doctrine\Filter\CountryFilter
```

2. Enable the filter

Example with Symfony 4 and environment variable set as "APP_COUNTRY":
```
/**
 * @var EntityManagerInterface $entityManager
 */
protected $entityManager;
...

$filters = $this->entityManager->getFilters();
$filterCountry = $filters->enable('country');
$filterCountry->setParameter('country', getenv('APP_COUNTRY'));
```

3. Implement the CountryInterface for the concerned entity

Example:
```
class MyClass implements CountryInterface
{
    use CountryTrait;
}
```
