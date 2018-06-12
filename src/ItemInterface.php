<?php

namespace Runroom\GildedRose;


abstract class ItemInterface
{
    public $name;
    public $sell_in;
    public $quality;

    function __construct(string $name, int $sell_in, int $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getSellIn(): int
    {
        return $this->sell_in;
    }

    /**
     * @param integer $sell_in
     */
    public function setSellIn(int $sell_in): void
    {
        $this->sell_in = $sell_in;
    }

    /**
     * @return integer
     */
    public function getQuality(): int
    {
        return $this->quality;
    }

    /**
     * @param integer $quality
     */
    public function setQuality(int $quality): void
    {
        $this->quality = $quality;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
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

    public function update(): void{}
}