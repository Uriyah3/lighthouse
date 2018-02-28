<?php

namespace Nuwave\Lighthouse\Support\Contracts;

interface GlobalIdResolver
{
    /**
     * Directive name.
     *
     * @return string
     */
    public function name();

    /**
     * Resolve node by global id.
     *
     * @param mixed  $id
     * @param string $globalId
     *
     * @return mixed
     */
    public function resolve($id, $globalId);
}
