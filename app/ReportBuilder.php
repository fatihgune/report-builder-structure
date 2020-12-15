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

    /**
     * @return $this
     */
    public function build(): ReportBuilder
    {
        // logic
        sleep(2);
        return $this;
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->repository->get();
    }

    public function export()
    {
        return $this->repository->export();
    }
}
