<?php

namespace Runroom\GildedRose;


class Item extends ItemInterface
{

    public function update(): void
    {

        $this->decrementQuality();
        $this->decrementSellIn();

        if($this->getSellIn()< 0) {
            $this->decrementQuality();
        }

        if($this->getQuality() <= 0) {
            $this->setQuality(0);
        }

    }

}
