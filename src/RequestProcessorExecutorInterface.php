<?php

declare(strict_types=1);

namespace Phpolar\HttpRequestProcessor;

/**
 * Invokes the process method with given arguments.
 */
interface RequestProcessorExecutorInterface
{
    /**
     * @param array<string,mixed> $args
     */
    public function execute(RequestProcessorInterface $requestProcessor, array $args): mixed;
}
