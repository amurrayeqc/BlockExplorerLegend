<?php
/**
 * Tests for BlockExplorerLegend
 */

use PHPUnit\Framework\TestCase;
use Blockexplorerlegend\Blockexplorerlegend;

class BlockexplorerlegendTest extends TestCase {
    private Blockexplorerlegend $instance;

    protected function setUp(): void {
        $this->instance = new Blockexplorerlegend(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockexplorerlegend::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
