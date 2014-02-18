<?php

namespace webignition\Tests\Fanout\Configuration;

use webignition\Tests\Fanout\BaseTest;

use webignition\Fanout\Configuration\Configuration;

class SetGetRealmKeyTest extends BaseTest {
    
    const REALM_KEY = 'bar';
    
    public function testSetReturnsSelf() {
        $configuration = new Configuration();
        $this->assertEquals($configuration, $configuration->setRealmKey(self::REALM_KEY));
    }
    
    
    public function testGetReturnsValueSet() {
        $configuration = new Configuration();
        $this->assertEquals(self::REALM_KEY, $configuration->setRealmKey(self::REALM_KEY)->getRealmKey());        
    }
    
    
    public function testGetBeforeSetThrowsException() {
        $this->setExpectedException(
            'webignition\Fanout\Configuration\Exception',
            'Realm key not set',
            \webignition\Fanout\Configuration\Exception::CODE_REALM_KEY_NOT_SET
        );
        
        $configuration = new Configuration();
        $this->assertEquals($configuration->getRealmKey()); 
    }    
    
}