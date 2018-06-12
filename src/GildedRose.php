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

            if ($item->getName() === self::AGED_BRIE) {

                $item->decrementSellIn();
                $item->incrementQuality();

                if($item->getSellIn() <= 0) {
                    $item->incrementQuality();
                }

                if($item->getQuality() >= 50) {
                    $item->setQuality(50);
                }

                return;
            }

            if ($item->getName() === self::BACKSTAGE) {

                $item->incrementQuality();

                if($item->getSellIn() <= 10) {
                    $item->incrementQuality();
                }

                if($item->getSellIn() <= 5) {
                    $item->incrementQuality();
                }

                if($item->getSellIn() <= 0) {
                    $item->setQuality(0);
                }

                $item->decrementSellIn();
                return;
            }

            if ($item->getName() != self::AGED_BRIE and $item->getName() != self::BACKSTAGE) {
                if ($item->getQuality() > 0) {
                    if ($item->getName() != self::SULFURAS) {
                        $item->decrementQuality();
                    }
                }
            } else {
                if ($item->getQuality() < 50) {
                    $item->incrementQuality();
                    if ($item->getName() == self::BACKSTAGE) {
                        if ($item->getSellIn() < 11) {
                            if ($item->getQuality() < 50) {
                                $item->incrementQuality();
                            }
                        }
                        if ($item->getSellIn() < 6) {
                            if ($item->getQuality() < 50) {
                                $item->incrementQuality();
                            }
                        }
                    }
                }
            }

            if ($item->getName() != self::SULFURAS) {
                $item->decrementSellIn();
            }

            if ($item->getSellIn() < 0) {
                if ($item->getName() != self::AGED_BRIE) {
                    if ($item->getName() != self::BACKSTAGE) {
                        if ($item->getQuality() > 0) {
                            if ($item->getName() != self::SULFURAS) {
                                $item->decrementQuality();
                            }
                        }
                    } else {
                        $item->setQuality($item->getQuality() - $item->getQuality());
                    }
                } else {
                    if ($item->getQuality() < 50) {
                        $item->incrementQuality();
                    }
                }
            }
        }
    }
}
