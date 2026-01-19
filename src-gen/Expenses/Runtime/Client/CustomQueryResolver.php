<?php

namespace NxSys\Library\Clients\Brex\API\Expenses\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}