<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJs7bTCw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJs7bTCw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJs7bTCw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJs7bTCw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJs7bTCw\App_KernelDevDebugContainer([
    'container.build_hash' => 'Js7bTCw',
    'container.build_id' => 'ccf07d37',
    'container.build_time' => 1686750069,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJs7bTCw');
