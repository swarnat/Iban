<?php
/**
 * Iban
 *
 * @author      Jan Schaedlich <schaedlich.jan@gmail.com>
 * @copyright   2013 Jan Schaedlich
 * @link        https://github.com/jschaedl/Iban
 *
 * MIT LICENSE
 */
namespace IBAN\Rule\DE;

class Rule001000 extends \IBAN\Rule\DE\Rule000000
{    
    public function generateIban() {
        if ($this->instituteIdentificationEquals('50050201') && 
        	$this->bankAccountNumberEquals('2000')) {
            return 'DE42500502010000222000';
        } else if ($this->instituteIdentificationEquals('50050201') && 
        	$this->bankAccountNumberEquals('800000')) {
            return 'DE89500502010000180802';
        } else {
            return parent::generateIban();
        }
    }
}
