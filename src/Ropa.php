<?php 


namespace integrador ;

class Ropa {
    
    private $config ;
    private $cn = null ;

    public function __construct() {
        $this-> config = parse_ini_file(__DIR__.'/../config.ini');
        print_r($this->config);
    }


}

?>