<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4fnqchc\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4fnqchc/appProdProjectContainer.php') {
    touch(__DIR__.'/Container4fnqchc.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container4fnqchc\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container4fnqchc\appProdProjectContainer(array(
    'container.build_hash' => '4fnqchc',
    'container.build_id' => 'd8fa6698',
    'container.build_time' => 1542614192,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4fnqchc');
