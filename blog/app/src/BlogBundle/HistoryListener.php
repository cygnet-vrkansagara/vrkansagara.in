<?php

namespace Vrkansagara\Blog\BlogBundle;

use Sculpin\Core\Event\SourceSetEvent;
use Sculpin\Core\Permalink\SourcePermalinkFactoryInterface;
use Sculpin\Core\Sculpin;
use Sculpin\Core\Source\SourceInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Process\Process;

class HistoryListener implements EventSubscriberInterface
{

    /**
     * @var string
     */
    private $projectDir;

    /**
     * @var SourcePermalinkFactoryInterface
     */
    private $permalinkFactory;


    /**
     * @param string $projectDir
     * @param SourcePermalinkFactoryInterface $permalinkFactory
     */
    public function __construct($projectDir, SourcePermalinkFactoryInterface $permalinkFactory)
    {
        $this->projectDir = $projectDir;
        $this->permalinkFactory = $permalinkFactory;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return [
//            Sculpin::EVENT_BEFORE_RUN => 'beforRun',
        ];
    }

    /**
     * @param SourceSetEvent $event
     */
    public function beforRun(SourceSetEvent $event)
    {
        print_r(__METHOD__);
//        print_r(__METHOD__);exit;
        /** @var SourceInterface $source */
        foreach ($event->allSources() as $source) {
//            print_r($source);exit;
        }
    }
}
