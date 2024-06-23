<?php

use Labrodev\Uuidable\Tests\MockModel;
use Ramsey\Uuid\Uuid;

test('uuid is automatically set on creating model', function () {
    $mockModel = new MockModel();
    
    MockModel::bootModelHasUuid();

    MockModel::getEventDispatcher()->dispatch('eloquent.creating: ' . get_class($mockModel), $mockModel);

    expect($mockModel->uuid)->toBeInstanceOf(Ramsey\Uuid\UuidInterface::class);
    expect(Uuid::isValid($mockModel->uuid->toString()))->toBeTrue();
});
