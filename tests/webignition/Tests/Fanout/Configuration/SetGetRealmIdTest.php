<?php

namespace webignition\Tests\Fanout\Configuration;

use webignition\Tests\Fanout\BaseTest;

use webignition\Fanout\Configuration\Configuration;

class SetGetRealmIdTest extends BaseTest {
    
    const REALM_ID = 'foo';
    
    public function testSetReturnsSelf() {
        $configuration = new Configuration();
        $this->assertEquals($configuration, $configuration->setRealmId(self::REALM_ID));
    }
    
    
    public function testGetReturnsValueSet() {
        $configuration = new Configuration();
        $this->assertEquals(self::REALM_ID, $configuration->setRealmId(self::REALM_ID)->getRealmId());        
    }
    
    
    public function testGetBeforeSetThrowsException() {
        $this->setExpectedException(
            'webignition\Fanout\Configuration\Exception',
            'Realm ID not set',
            \webignition\Fanout\Configuration\Exception::CODE_REALM_ID_NOT_SET
        );
        
        $configuration = new Configuration();
        $this->assertEquals($configuration->getRealmId()); 
    }    
    
}