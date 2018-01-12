<?php

namespace Cubes;

use Cubes\Firma\Osoba;

use Cubes\HR\Osoba as HROsoba;

/**
 * Description of App
 *
 * @author backend
 */
class App {
    
       /**
        *
        * @var \Cubes\Firma\Osoba 
        */
       protected $firmaOsoba;
       
       
       /**
        *
        * @var \Cubes\HR\Osoba 
        */
        protected $hrOsoba;
        
        function getFirmaOsoba(){
            return $this->firmaOsoba;
        }

        function getHrOsoba() {
            return $this->hrOsoba;
        }

        function setFirmaOsoba(Osoba $firmaOsoba) {
            $this->firmaOsoba = $firmaOsoba;
        }

        function setHrOsoba(HROsoba $hrOsoba) {
            $this->hrOsoba = $hrOsoba;
        }

        
        
        
    public static function test() {
        
    }
        
    
}












                                                                                

                                                                            


                                                                                