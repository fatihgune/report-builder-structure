<?php

return [
    'sources' => [
        Sessions::class => SessionRepository::class,
        Transactions::class => TransactionsRepository::class // to expand the example
    ]
];
