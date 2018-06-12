<?php

namespace Runroom\GildedRose;


class SulfurasItem implements ItemInterface
{
    public $name;
    public $sell_in;
    public $quality;

    function __construct($name, $sell_in, $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSellIn()
    {
        return $this->sell_in;
    }

    /**
     * @param mixed $sell_in
     */
    public function setSellIn($sell_in)
    {
        $this->sell_in = $sell_in;
    }

    /**
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }
    /**
     * @param mixed $quality
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    public function incrementQuality(): void
    {
        $this->quality++;
    }

    public function decrementQuality(): void
    {
        $this->quality--;
    }

    public function incrementSellIn(): void
    {
        $this->sell_in++;
    }

    public function decrementSellIn(): void
    {
        $this->sell_in--;
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

}