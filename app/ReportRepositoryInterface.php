<?php


namespace App;


interface ReportRepositoryInterface
{
    public function get();

    public function export();
}
