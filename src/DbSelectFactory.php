<?php

declare(strict_types=1);

namespace Laminas\Paginator\Adapter\LaminasDb;

use Psr\Container\ContainerInterface;

use function assert;
use function count;
use function is_a;

final class DbSelectFactory
{
    public function __invoke(ContainerInterface $container, string $requestedName, ?array $options = null): DbSelect
    {
        if (null === $options || count($options) < 2) {
            throw Exception\ServiceNotCreatedException::forMissingDbSelectDependencies();
        }

        assert(is_a($requestedName, DbSelect::class, true));
        return new $requestedName(
            $options[0],
            $options[1],
            $options[2] ?? null,
            $options[3] ?? null
        );
    }
}
