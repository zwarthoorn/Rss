<?php
/**
 * Created by PhpStorm.
 * User: walter
 * Date: 5/18/2018
 * Time: 11:37
 */
use PHPUnit\Framework\TestCase;
class ConfigTest extends TestCase
{
    public function testIsThereAnySyntaxError(){
        $var = new \Zwarthoorn\Rss\Reader();
        $this->assertTrue(is_object($var));
        unset($var);
    }

}