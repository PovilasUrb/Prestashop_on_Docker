<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXJ7CdJA\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXJ7CdJA/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerXJ7CdJA.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerXJ7CdJA\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerXJ7CdJA\appAppKernelProdContainer([
    'container.build_hash' => 'XJ7CdJA',
    'container.build_id' => 'c4c68d14',
    'container.build_time' => 1717444147,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXJ7CdJA');