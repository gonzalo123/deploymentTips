<?php
include __DIR__ . "/../App.php";

class AppTest extends PHPUnit_Framework_TestCase
{
    public function testEnvironDevelopment()
    {
        $environ = 'development';
        $app     = new App($environ);
        $this->assertEquals('Hello from DEVELOPMENT', $app->run());
    }

    public function testEnvironProduction()
    {
        $environ = 'production';
        $app     = new App($environ);
        $this->assertEquals('Hello from PRODUCTION', $app->run());
    }

    /**
     * @expectedException AppException
     */
    public function testEnvironNotFound()
    {
        $environ = 'xxxxx';
        $app     = new App($environ);
    }

    public function testGetConf()
    {
        $environ = 'development';
        $app     = new App($environ);

        $this->assertEquals('DEVELOPMENT', $app->getFromConf('ENVIRON'));
        $this->assertEquals('devel_username', $app->getFromConf('DB.MAIN.username'));
        $this->assertEquals('devel_password', $app->getFromConf('DB.MAIN.password'));
    }

    /**
     * @expectedException AppException
     */
    public function testGetConfWithKeyNotFound()
    {
        $environ = 'development';
        $app     = new App($environ);

        $app->getFromConf('DB.MAIN.xxx');
    }
}