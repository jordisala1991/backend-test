<?php

namespace Runroom\GildedRose;


class BackStageItem extends ItemInterface
{

    public function update(): void
    {
        $this->incrementQuality();

        if($this->getSellIn() <= 10) {
            $this->incrementQuality();
        }

        if($this->getSellIn() <= 5) {
            $this->incrementQuality();
        }

        if($this->getSellIn() <= 0) {
            $this->setQuality(0);
        }

        $this->decrementSellIn();
    }
}