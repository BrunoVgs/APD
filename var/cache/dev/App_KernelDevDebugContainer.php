<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1y11A6r\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1y11A6r/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1y11A6r.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1y11A6r\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1y11A6r\App_KernelDevDebugContainer([
    'container.build_hash' => '1y11A6r',
    'container.build_id' => 'db51c309',
    'container.build_time' => 1686907487,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1y11A6r');
