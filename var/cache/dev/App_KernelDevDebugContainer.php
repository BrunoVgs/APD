<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYQ68A2u\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYQ68A2u/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYQ68A2u.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYQ68A2u\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYQ68A2u\App_KernelDevDebugContainer([
    'container.build_hash' => 'YQ68A2u',
    'container.build_id' => 'c65e23c9',
    'container.build_time' => 1686646086,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYQ68A2u');
