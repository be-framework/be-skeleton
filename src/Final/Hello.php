<?php

declare(strict_types=1);

namespace Be\App\Final;

use Be\App\Reason\Greeting;
use Ray\Di\Di\Inject;
use Ray\InputQuery\Attribute\Input;

/**
 * @psalm-immutable
 * @psalm-api Entry point resolved by #[Be] attribute reflection in Becoming;
 *     Psalm cannot see this framework-reflected dispatch.
 */
final readonly class Hello
{
    public string $greeting;

    public function __construct(
        #[Input] string $name,
        #[Inject] Greeting $greeting,
    ) {
        $this->greeting = "{$greeting->greeting} {$name}";
    }
}
