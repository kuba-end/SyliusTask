<?php
declare(strict_types=1);

namespace App\Tests\App\Entity\Product;

use App\Entity\Product\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    private Product $product;
    public function setUp(): void
    {
        $this->product = new Product();
    }

    public function testItGetColorsReturnAnArray()
    {
        $this->assertIsArray($this->product::COLORS);
    }
    public function testItHasKey()
    {
        $this->assertCount(3,$this->product::COLORS);
        $this->assertArrayHasKey('Czerwony',$this->product::COLORS);
        $this->assertArrayHasKey('Zielony',$this->product::COLORS);
        $this->assertArrayHasKey('Niebieski',$this->product::COLORS);
    }
}
