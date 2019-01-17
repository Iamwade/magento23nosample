<?php

namespace Akulov\SampleModule\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Akulov\SampleModule\Api\Data\ItemInterface[]
     */
    public function getList();
}
