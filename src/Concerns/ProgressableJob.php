<?php

namespace Rakhasa\LaravelUtility\Concerns;

use Rakhasa\LaravelUtility\Contracts\Repositories\ProgressRepositoryContract;
use Rakhasa\LaravelUtility\Models\Progress;

trait ProgressableJob
{
    /**
     * Progress Model Instance
     *
     * @var Progress $progress
     */
    protected Progress $progress;

    /**
     * Get Progress By ID
     *
     * @param string $progress
     * @return Progress
     */
    public function getProgressById(string $progress): Progress
    {
        return app(ProgressRepositoryContract::class)->getOneById($progress);
    }

    /**
     * Set Progress as Complete
     *
     * @return void
     */
    protected function completeProgress(): void
    {
        $this->progress->setAsComplete();
    }
}
