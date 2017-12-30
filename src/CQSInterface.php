<?php

namespace Circle314\Component\CQS;

/**
 * Interface CQSCommandInterface
 * @package Circle314\Component\CQS
 *
 * When applying CQS to your projects, separate Commands and Queries into two interfaces.
 * Once separated, your class should implement an extension of this interface.
 */
interface CQSInterface extends CQSCastingInterface, CQSCommandInterface, CQSQueryInterface
{

}
