<?php

namespace Runroom\GildedRose;


class AgedBrieItem extends ItemInterface
{

    public function update()
    {
        $this->decrementSellIn();
        $this->incrementQuality();

        if($this->getSellIn() <= 0) {
            $this->incrementQuality();
        }

        if($this->getQuality() >= 50) {
            $this->setQuality(50);
        }
    }

}