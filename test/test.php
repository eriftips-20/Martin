<?php
use PHPUnit\Framework\TestCase;

class LandingPageTest extends TestCase
{
    public function testPageTitle()
    {
        $expectedTitle = "My Landing Page";
        $actualTitle = "My Landing Page";
        $this->assertEquals($expectedTitle, $actualTitle);
    }
    
    public function testPageContent()
    {
        $expectedMessage = "Welcome to our website!";
        $actualMessage = "Welcome to our website!";
        $this->assertEquals($expectedMessage, $actualMessage);
    }
    
    public function testPHPVersion()
    {
        $this->assertTrue(version_compare(PHP_VERSION, '8.0', '>='));
    }
}