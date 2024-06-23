# Uuidable for Laravel

Uuidable is a Laravel package that provides a reusable trait for automatically assigning a UUID to Eloquent models upon their creation. This package utilizes the Ramsey UUID library to ensure UUIDs are generated in a standard and reliable manner.

## Installation

To install the package, run the following command in your Laravel project:

```bash
composer require labrodev/uuidable
```

## Requirements

- PHP 8.1 or higher

## Configuration

After installing the package, no additional configuration is needed to start using the UUID trait in your models.

## Usage

To use the `ModelHasUuid` trait, simply include it in your Eloquent model:

```php 

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Labrodev\Uuidable\ModelHasUuid;

class ExampleModel extends Model
{
    use ModelHasUuid;
}
```

Ensure that your model has 'uuid' column in model database table. 

If it is not, you may add it through Laravel migration: 

```php
$table->uuid('uuid');
```

## Override uuid column name

If the column in your database table designated for UUID storage has a name different from the default, you can customize the trait to accommodate this. 

Simply override the trait method in your model by adding the following method with your specific column name:

```php 
/**
* @return string
*/
protected function fetchUuidColumn(): string
{
    return 'your-uuid-column-name';
}
```

## Testing

To run the tests included with the package, execute the following command:

```bash
composer test
```

For static analysis to check the package code, execute the followin command: 

```bash
composer analyse
```

## Security

If you discover any security-related issues, please email admin@labrodev.com instead of using the issue tracker.

## Credits

Labro Dev

## License

The MIT License (MIT). Please see License File for more information.

## Read more

Read more about this topic on our Substack page: [https://labrodev.substack.com/p/uuid-generation-in-eloquent-models]
