<?php

namespace Runroom\GildedRose;


interface ItemInterface
{
    const AGED_BRIE = 'Aged Brie';

    const BACKSTAGE = 'Backstage passes to a TAFKAL80ETC concert';

    const SULFURAS = 'Sulfuras, Hand of Ragnaros';

    public function update();
}