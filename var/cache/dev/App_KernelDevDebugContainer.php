<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJuROvCP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJuROvCP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJuROvCP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJuROvCP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJuROvCP\App_KernelDevDebugContainer([
    'container.build_hash' => 'JuROvCP',
    'container.build_id' => 'b876565b',
    'container.build_time' => 1686752025,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJuROvCP');
