<?php


namespace App;


class ReportBuilder
{
    /**
     * @var
     */
    private $repository;

    /**
     * ReportBuilder constructor.
     * @param $repository
     */
    public function __construct($repository)
    {
        $this->repository = $repository;
    }
}
