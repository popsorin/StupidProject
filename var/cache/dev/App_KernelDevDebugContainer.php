<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG9cRkQ4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG9cRkQ4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG9cRkQ4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG9cRkQ4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG9cRkQ4\App_KernelDevDebugContainer([
    'container.build_hash' => 'G9cRkQ4',
    'container.build_id' => '0a89855e',
    'container.build_time' => 1599752353,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG9cRkQ4');
