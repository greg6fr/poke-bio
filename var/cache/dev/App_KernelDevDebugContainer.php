<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6IbJ8A9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6IbJ8A9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6IbJ8A9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6IbJ8A9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6IbJ8A9\App_KernelDevDebugContainer([
    'container.build_hash' => '6IbJ8A9',
    'container.build_id' => 'a74587bf',
    'container.build_time' => 1706278461,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6IbJ8A9');
