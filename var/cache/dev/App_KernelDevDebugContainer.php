<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3GZQOPy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3GZQOPy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3GZQOPy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3GZQOPy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3xG3ViF\App_KernelDevDebugContainer([
    'container.build_hash' => '3xG3ViF',
    'container.build_id' => 'cf02a928',
    'container.build_time' => 1686571691,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3xG3ViF');
