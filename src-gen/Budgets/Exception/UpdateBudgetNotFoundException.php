<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Budgets\Exception;

class UpdateBudgetNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not Found');
    }
}
