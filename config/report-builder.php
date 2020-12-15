<?php

use App\Sessions;
use App\SessionsRepository;
use App\Transactions;
use App\TransactionsRepository;

return [
    'sources' => [
        Sessions::class => SessionsRepository::class,
        Transactions::class => TransactionsRepository::class // to expand the example
    ]
];
