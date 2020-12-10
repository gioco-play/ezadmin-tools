<?php

declare(strict_types=1);

namespace GiocoPlus\PrismPlus;


class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                CacheInterface::class => Cache::class,
                ConfigInterface::class => Config::class,
                EventDispatcherInterface::class => EventDispatcher::class
            ],
            'commands' => [
            ],
            'listeners' => [

            ],
            // 合并到  config/autoload/annotations.php 文件
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'scan' => [
                'paths' => [
                    __DIR__,
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config of prismplus client.',
                    'source' => __DIR__ . '/publish/prismplus.php',
                    'destination' => BASE_PATH . '/config/autoload/prismplus.php',
                ],
                [
                    'id' => 'SeamlessListener',
                    'description' => 'The seamless request listener',
                    'source' => __DIR__ . '/Listener/SeamlessRequestListener.php',
                    'destination' => BASE_PATH . '/app/Listener/SeamlessRequestListener.php',
                ],
                [
                    'id' => 'TransactionRequestListener',
                    'description' => 'The transaction request listener',
                    'source' => __DIR__ . '/Listener/TransactionRequestListener.php',
                    'destination' => BASE_PATH . '/app/Listener/TransactionRequestListener.php',
                ],
                [
                    'id' => 'BoIPCheckMiddleware',
                    'description' => 'The bo ip checker',
                    'source' => __DIR__ . '/Middleware/BoIPCheckMiddleware.php',
                    'destination' => BASE_PATH . '/app/Middleware/BoIPCheckMiddleware.php',
                ],
                [
                    'id' => 'BoStatusCheckMiddleware',
                    'description' => 'The bo status checker',
                    'source' => __DIR__ . '/Middleware/BoStatusCheckMiddleware.php',
                    'destination' => BASE_PATH . '/app/Middleware/BoStatusCheckMiddleware.php',
                ],
                [
                    'id' => 'GlobalBlockIPMiddleware',
                    'description' => 'The global block ip checker',
                    'source' => __DIR__ . '/Middleware/GlobalBlockIPMiddleware.php',
                    'destination' => BASE_PATH . '/app/Middleware/GlobalBlockIPMiddleware.php',
                ],
                [
                    'id' => 'VendorCheckMiddleware',
                    'description' => 'The global block ip checker',
                    'source' => __DIR__ . '/Middleware/VendorCheckMiddleware.php',
                    'destination' => BASE_PATH . '/app/Middleware/VendorCheckMiddleware.php',
                ],
                [
                    'id' => 'PermissionCheckMiddleware',
                    'description' => 'The global block ip checker',
                    'source' => __DIR__ . '/Middleware/PermissionCheckMiddleware.php',
                    'destination' => BASE_PATH . '/app/Middleware/PermissionCheckMiddleware.php',
                ]
            ],
        ];
    }
}
