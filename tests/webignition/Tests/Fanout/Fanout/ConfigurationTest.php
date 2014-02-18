<?php

namespace webignition\Tests\Fanout\Fanout;

use webignition\Tests\Fanout\BaseTest;
use webignition\Fanout\Fanout;
use webignition\Fanout\Configuration\Configuration;

class ConfigurationTest extends BaseTest {
    
    public function testGetDefaultConfiguration() {
        $fanout = new Fanout();
        $configuration = new Configuration();
        
        $this->assertEquals($configuration, $fanout->getConfiguration());
    }
    
}