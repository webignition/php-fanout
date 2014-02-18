<?php

namespace webignition\Fanout\Configuration;

class Exception extends \Exception {
    
    const CODE_REALM_ID_NOT_SET = 1;
    const CODE_REALM_KEY_NOT_SET = 2;
    
    /**
     * 
     * @return boolean
     */
    public function isRealmIdNotSet() {
        return $this->getCode() === self::CODE_REALM_ID_NOT_SET;
    }
    
    /**
     * 
     * @return boolean
     */
    public function isRealmKeyNotSet() {
        return $this->getCode() === self::CODE_REALM_KEY_NOT_SET;
    }    
    
}