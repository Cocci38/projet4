<?php

use PHPUnit\Util\Filesystem;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controler
{
    private $loader;
    protected $twig;



    public function __construct()
    {
        $this->loader = new FilesystemLoader(__DIR__ . '/templates/');
        $this->twig = new Environment($this->loader);
    }
}