<?php


namespace App;


interface ReportInterface
{
    public function build();

    public function get();

    public function export();
}
