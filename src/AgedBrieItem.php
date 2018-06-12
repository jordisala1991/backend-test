<?php

namespace Runroom\GildedRose;


class AgedBrieItem extends ItemInterface
{

    public function update(): void
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