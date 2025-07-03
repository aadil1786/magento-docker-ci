<?php
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase {
    public function testMagentoLoads() {
        $this->assertTrue(file_exists(__DIR__ . '/../index.php'));
    }
}
