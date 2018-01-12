<?php


namespace Cubes\Util;

/**
 * Description of EmailCapable
 *
 * @author Ranko Andric <andere395@gmail.com>
 */
interface EmailCapable {
    //put your code here
    
    /**
     * @return string 
     */
    public function getEmail();
    
    /**
     * 
     * @param string $email
     */
    public function setEmail($email);
}
