<?php


namespace App;


class ReportBuilder
{
    /**
     * @var ReportRepositoryInterface
     */
    private $repository;

    /**
     * ReportBuilder constructor.
     * @param ReportRepositoryInterface $repository
     */
    public function __construct(ReportRepositoryInterface $repository)
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
