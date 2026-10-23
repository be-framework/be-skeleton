<?php

declare(strict_types=1);

namespace Be\App\Semantic;

use Be\App\Exception\EmptyNameException;
use Be\Framework\Attribute\Validate;

use function trim;

/**
 * Name
 *
 * @link https://schema.org/name name property
 *
 * @psalm-pure
 * @psalm-api Entry point resolved by SemanticValidator naming convention;
 *     Psalm cannot see this framework-reflected dispatch.
 */
final class Name
{
    /** @psalm-pure */
    #[Validate]
    public function validate(string $name): void
    {
        if (empty(trim($name))) {
            throw new EmptyNameException();
        }
    }
}
