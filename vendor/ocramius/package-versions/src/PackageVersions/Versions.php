<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'codeigniter/framework';
    public const VERSIONS          = array (
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'guzzlehttp/psr7' => '1.6.0@dc784032a3f6f4e7a4b882e272b771f6fe4c37cf',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'jmathai/php-multi-curl' => 'dev-master@33c5d80128e6ea1e72a9440ffbdb8fab05a472da',
  'monolog/monolog' => '1.23.0@fd8c787753b3a2ad11bc60c063cff1358a32a3b4',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'php-http/client-common' => '2.0.0@2b8aa3c4910afc21146a9c8f96adb266e869517a',
  'php-http/curl-client' => '2.0.0@e7a2a5ebcce1ff7d75eaf02b7c85634a6fac00da',
  'php-http/discovery' => '1.7.0@e822f86a6983790aa17ab13aa7e69631e86806b6',
  'php-http/httplug' => 'v2.0.0@b3842537338c949f2469557ef4ad4bdc47b58603',
  'php-http/message' => '1.7.2@b159ffe570dffd335e22ef0b91a946eacb182fa1',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.0.2@4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.8.0@d09ea80159c1929d75b3f9c60504d613aeb4a1e3',
  'sentry/sdk' => '2.0.3@91c36aec83e4c1c5801b64ef4927b78a5aa8ce7f',
  'sentry/sentry' => '2.1.1@8e27e6c5fcf6f01fc2e5235dd14cc0b2b347d793',
  'symfony/options-resolver' => 'v4.3.2@40762ead607c8f792ee4516881369ffa553fee6f',
  'symfony/polyfill-ctype' => 'v1.8.0@7cc359f1b7b80fc25ed7796be7d96adc9b354bae',
  'zendframework/zend-diactoros' => '2.1.2@37bf68b428850ee26ed7c3be6c26236dd95a95f1',
  'doctrine/instantiator' => '1.0.5@8e884e78f9f0eb1329e445619e04456e64d8051d',
  'mikey179/vfsStream' => 'v1.1.0@fc0fe8f4d0b527254a2dc45f0c265567c881d07e',
  'myclabs/deep-copy' => '1.7.0@3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e',
  'phpdocumentor/reflection-common' => '1.0.1@21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
  'phpdocumentor/reflection-docblock' => '4.3.0@94fd0001232e47129dd3504189fa1c7225010d08',
  'phpdocumentor/type-resolver' => '0.4.0@9c977708995954784726e25d0cd1dddf4e65b0f7',
  'phpspec/prophecy' => '1.7.6@33a7e3c4fda54e912ff6338c48823bd5c0f0b712',
  'phpunit/php-code-coverage' => '4.0.8@ef7b2f56815df854e66ceaee8ebe9393ae36a40d',
  'phpunit/php-file-iterator' => '1.4.5@730b01bc3e867237eaac355e06a36b85dd93a8b4',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '1.0.9@3dcf38ca72b158baf0bc245e9184d3fdffa9c46f',
  'phpunit/php-token-stream' => '2.0.2@791198a2c6254db10131eecfe8c06670700904db',
  'phpunit/phpunit' => '5.7.27@b7803aeca3ccb99ad0a506fa80b64cd6a56bbc0c',
  'phpunit/phpunit-mock-objects' => '3.4.4@a23b761686d50a560cc56233b9ecf49597cc9118',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '1.2.4@2b7424b55f5047b47ac6e5ccb20b2aea4011d9be',
  'sebastian/diff' => '1.4.3@7f066a26a962dbe58ddea9f72a4e82874a3975a4',
  'sebastian/environment' => '2.0.0@5795ffe5dc5b02460c3e34222fee8cbe245d8fac',
  'sebastian/exporter' => '2.0.0@ce474bdd1a34744d7ac5d6aad3a46d48d9bac4c4',
  'sebastian/global-state' => '1.1.1@bc37d50fea7d017d3d340f230811c9f1d7280af4',
  'sebastian/object-enumerator' => '2.0.1@1311872ac850040a79c3c058bea3e22d0f09cbb7',
  'sebastian/recursion-context' => '2.0.0@2c3ba150cbec723aa057506e73a8d33bdb286c9a',
  'sebastian/resource-operations' => '1.0.0@ce990bb21759f94aeafd30209e8cfcdfa8bc3f52',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'symfony/yaml' => 'v3.4.12@c5010cc1692ce1fa328b1fb666961eb3d4a85bb0',
  'webmozart/assert' => '1.3.0@0df1908962e7a3071564e857d86874dad1ef204a',
  'codeigniter/framework' => 'dev-master@555b01d3321e23e938feeef4d5b5e3ce4ff545d5',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}
