<?php

namespace Dtc\QueueBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Dtc\GridBundle\Annotation as Grid;

/**
 * @Grid\Grid(actions={@Grid\ShowAction()},sort=@Grid\Sort(column="endedAt",direction="DESC"))
 * @ODM\Document(db="dtc_queue", collection="run_archive")
 */
class RunArchive extends BaseRun
{
    /**
     * @ODM\Field(type="date", nullable=true)
     */
    protected $startedAt;
    /**
     * @Grid\Column(sortable=true, order=2)
     * @ODM\Field(type="date", nullable=true)
     * @ODM\Index(unique=false, order="desc")
     */
    protected $endedAt;

    /**
     * @Grid\Column()
     * @ODM\Field(type="float", nullable=true)
     */
    protected $elapsed;

    /**
     * @ODM\Field(type="int", nullable=true)
     */
    protected $duration; // How long to run for in seconds

    /**
     * @ODM\Field(type="int", nullable=true)
     */
    protected $maxCount;

    /**
     * @ODM\Field(type="date")
     */
    protected $lastHeartbeatAt;

    /**
     * @ODM\Field(type="int", nullable=true)
     */
    protected $processTimeout;

    /**
     * @ODM\Field(type="string", nullable=true)
     */
    protected $currentJobId;
}
