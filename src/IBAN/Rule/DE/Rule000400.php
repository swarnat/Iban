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

class Rule000400 extends \IBAN\Rule\DE\Rule000000
{     
	protected $bankAccountSubstitutions = array(
		  "135" => "0990021440"
		, "1111" => "6600012020"
		, "1900" => "0920019005"
		, "7878" => "0780008006"
		, "8888" => "0250030942"
		, "9595" => "1653524703"
		, "97097" => "0013044150"
		, "112233" => "0630025819"
		, "336666" => "6604058903"
		, "484848" => "0920018963"		
	);
}
