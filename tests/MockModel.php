<?php

namespace Labrodev\Uuidable\Tests;

use Illuminate\Database\Eloquent\Model;
use Labrodev\Uuidable\ModelHasUuid;

class MockModel extends Model
{
    use ModelHasUuid;

    public $uuid;
}
