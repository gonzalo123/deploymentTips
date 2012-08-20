<?php
class AppException extends Exception{}

class App
{
    private $conf;

    public function __construct($environ)
    {
        $this->conf = $this->getConfFromEnviron($environ);
    }

    private function getConfFromEnviron($environ)
    {
        $filePath = $this->getConfFilePath($environ);
        if (!is_file($filePath)) {
            throw new AppException("File '{$filePath}' not found");
        }
        return require($filePath);
    }

    private function getConfFilePath($environ)
    {
        return __DIR__ . "/../conf/{$environ}.php";
    }

    public function getFromConf($key)
    {
        $out = $this->conf;
        foreach (explode('.', $key) as $item) {
            if (isset($out[$item])) {
                $out = $out[$item];
            } else {
                throw new AppException("Key '{$key}' not found");
            }
        }
        return $out;
    }

    public function run()
    {
        $environ = $this->getFromConf('ENVIRON');
        return "Hello from {$environ}";
    }
}