<?php

namespace Faker\Extension;

use Faker\Extension\Extension;

/**
 * @experimental This interface is experimental and does not fall under our BC promise
 */
interface CompanyExtension extends Extension
{
    /**
     * @example 'Acme Ltd'
     */
    public function company(): string;

    /**
     * @example 'Ltd'
     */
    public function companySuffix(): string;

    public function jobTitle(): string;
}
