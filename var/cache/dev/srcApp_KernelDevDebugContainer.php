<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLxDKTfC\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLxDKTfC/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLxDKTfC.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLxDKTfC\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLxDKTfC\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'LxDKTfC',
    'container.build_id' => '340eee9a',
    'container.build_time' => 1586253784,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLxDKTfC');
