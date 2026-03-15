<?php
/**
 * Tests for PinotRealtime
 */

use PHPUnit\Framework\TestCase;
use Pinotrealtime\Pinotrealtime;

class PinotrealtimeTest extends TestCase {
    private Pinotrealtime $instance;

    protected function setUp(): void {
        $this->instance = new Pinotrealtime(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pinotrealtime::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
