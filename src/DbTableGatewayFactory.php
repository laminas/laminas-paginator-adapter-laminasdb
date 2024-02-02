<?php

declare(strict_types=1);

namespace Laminas\Paginator\Adapter\LaminasDb;

use Psr\Container\ContainerInterface;

use function assert;
use function count;
use function is_a;

final class DbTableGatewayFactory
{
    public function __invoke(
        ContainerInterface $container,
        string $requestedName,
        ?array $options = null
    ): DbTableGateway {
        if (null === $options || count($options) < 1) {
            throw Exception\ServiceNotCreatedException::forMissingDbTableGatewayDependencies();
        }

        assert(is_a($requestedName, DbTableGateway::class, true));
        return new $requestedName(
            $options[0],
            $options[1] ?? null,
            $options[2] ?? null,
            $options[3] ?? null,
            $options[4] ?? null
        );
    }
}
