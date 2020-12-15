<?php

namespace Tests\Feature;

use App\Sessions;
use App\Transactions;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class ReportBuilderTest extends TestCase
{

    public function testReportBuilderGeneration(): void
    {
        $typeSessions = App::make(Sessions::class);
        self::assertEquals('App\SessionsRepository::get', $typeSessions->build()->get());
        self::assertEquals('App\SessionsRepository::export', $typeSessions->build()->export());

        $typeTransactions = App::make(Transactions::class);
        self::assertEquals('App\TransactionsRepository::get', $typeTransactions->build()->get());
        self::assertEquals('App\TransactionsRepository::export', $typeTransactions->build()->export());

    }
}
