<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNVlCNRX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNVlCNRX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNVlCNRX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNVlCNRX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNVlCNRX\App_KernelDevDebugContainer([
    'container.build_hash' => 'NVlCNRX',
    'container.build_id' => '1273a0a2',
    'container.build_time' => 1706192657,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNVlCNRX');
