<?php

namespace Runroom\GildedRose;

class GildedRose {

    private $items;

    const AGED_BRIE = 'Aged Brie';

    const BACKSTAGE = 'Backstage passes to a TAFKAL80ETC concert';

    const SULFURAS = 'Sulfuras, Hand of Ragnaros';

    function __construct($items) {
        $this->items = $items;
    }

    function update_quality() {
        foreach ($this->items as $item) {
            if ($item->getName() != self::AGED_BRIE and $item->getName() != self::BACKSTAGE) {
                if ($item->getQuality() > 0) {
                    if ($item->getName() != self::SULFURAS) {
                        $item->quality = $item->quality - 1;
                    }
                }
            } else {
                if ($item->getQuality() < 50) {
                    $item->quality = $item->quality + 1;
                    if ($item->getName() == self::BACKSTAGE) {
                        if ($item->getSellIn() < 11) {
                            if ($item->getQuality() < 50) {
                                $item->quality = $item->quality + 1;
                            }
                        }
                        if ($item->getSellIn() < 6) {
                            if ($item->getQuality() < 50) {
                                $item->quality = $item->quality + 1;
                            }
                        }
                    }
                }
            }

            if ($item->getName() != self::SULFURAS) {
                $item->sell_in = $item->sell_in - 1;
            }

            if ($item->getSellIn() < 0) {
                if ($item->getName() != self::AGED_BRIE) {
                    if ($item->getName() != self::BACKSTAGE) {
                        if ($item->getQuality() > 0) {
                            if ($item->getName() != self::SULFURAS) {
                                $item->quality = $item->quality - 1;
                            }
                        }
                    } else {
                        $item->quality = $item->quality - $item->quality;
                    }
                } else {
                    if ($item->getQuality() < 50) {
                        $item->quality = $item->quality + 1;
                    }
                }
            }
        }
    }
}
