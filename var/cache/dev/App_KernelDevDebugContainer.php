<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVF2JmHL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVF2JmHL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVF2JmHL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVF2JmHL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVF2JmHL\App_KernelDevDebugContainer([
    'container.build_hash' => 'VF2JmHL',
    'container.build_id' => '148bb4af',
    'container.build_time' => 1686213191,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVF2JmHL');
