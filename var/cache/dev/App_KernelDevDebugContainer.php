<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAjOIK3B\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAjOIK3B/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAjOIK3B.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAjOIK3B\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAjOIK3B\App_KernelDevDebugContainer([
    'container.build_hash' => 'AjOIK3B',
    'container.build_id' => '8b1d725e',
    'container.build_time' => 1687356560,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAjOIK3B');
