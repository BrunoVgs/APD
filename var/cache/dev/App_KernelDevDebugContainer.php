<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRZU6qgW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRZU6qgW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRZU6qgW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRZU6qgW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRZU6qgW\App_KernelDevDebugContainer([
    'container.build_hash' => 'RZU6qgW',
    'container.build_id' => '8d4bbefa',
    'container.build_time' => 1686228459,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRZU6qgW');
