<?php

namespace webignition\Fanout\Configuration;

use webignition\Fanout\Configuration\Exception;

/**
 * 
 */
class Configuration {
    
    /**
     *
     * @var string
     */
    private $realmId = null;
    
    /**
     *
     * @var string
     */
    private $realmKey = null;
    
    
    /**
     * 
     * @param string $realmId
     * @return \webignition\Fanout\Configuration
     */
    public function setRealmId($realmId) {
        $this->realmId = $realmId;
        return $this;
    }
    
    
    /**
     * 
     * @return string
     */
    public function getRealmId() {
        if (!$this->hasRealmId()) {
            throw new Exception('Realm ID not set', Exception::CODE_REALM_ID_NOT_SET);
        }
        
        return $this->realmId;
    }
    
    
    /**
     * 
     * @return boolean
     */
    public function hasRealmId() {
        return !is_null($this->realmId);
    }
    
    
    /**
     * 
     * @param string $realmKey
     * @return \webignition\Fanout\Configuration
     */
    public function setRealmKey($realmKey) {
        $this->realmKey = $realmKey;
        return $this;
    }
    
    
    /**
     * 
     * @return string
     */
    public function getRealmKey() {
        if (!$this->hasRealmKey()) {
            throw new Exception('Realm key not set', Exception::CODE_REALM_KEY_NOT_SET);
        }        
        
        return $this->realmKey;
    }
    
    
    /**
     * 
     * @return boolean
     */
    public function hasRealmKey() {
        return !is_null($this->realmKey);
    }
    
}