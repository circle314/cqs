<?php

namespace Circle314\Component\CQS;

interface CQSCastingInterface
{
    /**
     * Returns the object with Commands and Queries enabled.
     *
     * @return CQSInterface
     */
    public function asCommandsAndQueries();

    /**
     * Returns the object with just Commands enabled.
     *
     * @return CQSCommandInterface
     */
    public function asCommandsOnly();

    /**
     * Returns the object with just Queries enabled.
     *
     * @return CQSQueryInterface
     */
    public function asQueriesOnly();
}