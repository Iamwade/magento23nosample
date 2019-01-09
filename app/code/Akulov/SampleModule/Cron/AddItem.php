<?php

namespace Akulov\SampleModule\Cron;

use Akulov\SampleModule\Model\ItemFactory;

class AddItem
{
    private $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute()
    {
        $this->itemFactory->create()
            ->setName('Last Scheduled item')
            ->setDescription('Created at ' . time())
            ->save();
    }
}
