<?php
/**
 * Tests for NFTForgeMax
 */

use PHPUnit\Framework\TestCase;
use Nftforgemax\Nftforgemax;

class NftforgemaxTest extends TestCase {
    private Nftforgemax $instance;

    protected function setUp(): void {
        $this->instance = new Nftforgemax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftforgemax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
