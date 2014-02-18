<?php
namespace webignition\Fanout;

use webignition\Fanout\Configuration\Configuration;

/**
 * 
 */
class Fanout {
    
    /**
     *
     * @var Configuration
     */
    private $configuration;   
    

    /**
     * 
     * @return \webignition\Fanout\Configuration\Configuration
     */
    public function getConfiguration() {
        if (is_null($this->configuration)) {
            $this->configuration = new Configuration();
        }
        
        return $this->configuration;
    }
    
}