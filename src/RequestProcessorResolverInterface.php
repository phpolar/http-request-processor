<?php

declare(strict_types=1);

namespace Phpolar\HttpRequestProcessor;

/**
 * Used by the application to determine if the
 * request processor should be used. For example,
 * this could be used for authenticating HTTP
 * request targets after the request targets has
 * been resolved.
 */
interface RequestProcessorResolverInterface
{
    /**
     * Return the given request processor or false.
     */
    public function resolve(RequestProcessorInterface $target): RequestProcessorInterface | false;
}
