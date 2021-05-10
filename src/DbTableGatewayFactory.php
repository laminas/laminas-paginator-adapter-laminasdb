<?php

namespace Laminas\Paginator\Adapter\LaminasDb;

use Psr\Container\ContainerInterface;

use function count;

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

        return new $requestedName(
            $options[0],
            $options[1] ?? null,
            $options[2] ?? null,
            $options[3] ?? null,
            $options[4] ?? null
        );
    }
}
