<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3Gqmwg4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3Gqmwg4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3Gqmwg4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3Gqmwg4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3Gqmwg4\App_KernelDevDebugContainer([
    'container.build_hash' => '3Gqmwg4',
    'container.build_id' => '23c092fb',
    'container.build_time' => 1649626618,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3Gqmwg4');
