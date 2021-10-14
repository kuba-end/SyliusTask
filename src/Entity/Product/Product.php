<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;


class Product extends BaseProduct
{
    private string $color;

    public const COLORS= [
        'Czerwony' => 'Czerwony',
        'Zielony'=> 'Zielony',
        'Niebieski' => 'Niebieski',
        ];

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public static function getColors():array
    {
        return self::COLORS;
    }

}
