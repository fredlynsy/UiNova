<?php
/**
 * Tests for UiNova
 */

use PHPUnit\Framework\TestCase;
use Uinova\Uinova;

class UinovaTest extends TestCase {
    private Uinova $instance;

    protected function setUp(): void {
        $this->instance = new Uinova(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Uinova::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
