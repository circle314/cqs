<?php

namespace Circle314\Component\CQS;

/**
 * Interface CQSCommandInterface
 * @package Circle314\Component\CQS
 *
 * When applying CQS to your projects, separate Commands and Queries into two interfaces.
 * All Queries for your class should go into an extension of this interface.
 */
interface CQSQueryInterface extends CQSCastingInterface
{

}
