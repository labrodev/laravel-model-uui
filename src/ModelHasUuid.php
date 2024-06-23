<?php

declare(strict_types=1);

namespace Labrodev\Uuidable;

use Illuminate\Support\Str;

trait ModelHasUuid
{
    /**
     * @return void
     */
    public static function bootModelHasUuid(): void
    {
        static::creating(function ($model) {
             /** @var static|self $model */
            if (empty($model->{$model->fetchUuidColumn()})) {
                $model->{$model->fetchUuidColumn()} = Str::uuid();
            }
        });
    }

    /**
     * @return string
     */
    protected function fetchUuidColumn(): string
    {
        return 'uuid';
    }
}
