<?php
namespace App\Helpers;

use App\Helpers\Cpf;
use App\Helpers\Cnpj;

class Mask
{
	/**
	 * Formata como mascara no padrão
	 * mask(99999, ##.###);
	 */
	public static function mask($val, $mask)
	{
		$maskared = '';
		$k = 0;
		for($i = 0; $i<=strlen($mask)-1; $i++) {
			if($mask[$i] == '#') {
				if(isset($val[$k])) {
					$maskared .= $val[$k++];
				}
			} else {
				if(isset($mask[$i])) {
					$maskared .= $mask[$i];
				}
			}
		}
		return $maskared;
	}

	public static function cpf($val)
	{
		return Cpf::mask($val);
	}

	public static function cnpj($val)
	{
		return Cnpj::mask($val);
	}

	public static function documento($val)
	{
		$val = Misc::onlyNumbers($val);
		if (strlen($val) === 11) {
			return Cpf::mask($val);
		} elseif (strlen($val) === 14) {
			return Cnpj::mask($val);
		}
		return $val;
	}

	public static function phone($val)
	{
		$val = Misc::onlyNumbers($val);
		if (strlen($val) === 10) {
			return self::mask($val, '(##) ####-####');
		} elseif (strlen($val) === 11) {
			return self::mask($val, '(##) # ####-####');
		}
		return $val;
	}
}