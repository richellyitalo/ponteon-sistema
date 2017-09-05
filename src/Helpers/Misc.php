<?php
namespace App\Helpers;

class Misc
{
	/*
	 * Retorna apenas números
	 */
	public static function onlyNumbers($string)
	{
		if (is_null($string))
			return '';
		return preg_replace('/\D/', '', $string);
	}

	public static function toDecimal($value)
	{
		if (empty($value))
			return $value;
		$valueWithoutSymbols = str_replace(['.', ','], ['', '.'], $value);
		$valueFormated = number_format($valueWithoutSymbols, 2, ".", "");

		return $valueFormated;
	}

  public static function notDecimal($value)
  {
    if (empty($value))
      return $value;
    $valueWithoutSymbols = str_replace(['.', ','], ['', '.'], $value);
    $valueFormated = number_format($valueWithoutSymbols, 0, ".", "");

    return $valueFormated;
  }

	/**
	 * Calcular a porcentagem de um valor com base num total
	 */
	public static function getPercent($valueTotal, $valueToPercent, $round = false)
	{
		$percent = ( $valueToPercent * 100 ) / $valueTotal;
		return round($percent, $round ? 0 : 2);
	}

	public static function strRandom($length = 8)
	{
        $string = '';

        while (($len = mb_strlen($string)) < $length) {
            $size = $length - $len;

            $bytes = random_bytes($size);

            $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $string;
	}

    public static function intCodeRandom($length = 8)
    {
        $intMin = (10 * $length) / 10; // 100...
        $intMax = (10 * $length) - 1;  // 999...

        $codeRandom = mt_rand($intMin, $intMax);

        return $codeRandom;
    }


	public static function splitTextMiddle($title)
	{
		$title = strip_tags( $title );
		$middleLength = floor( strlen( $title ) / 2 );

		$newTitle = explode( '<br />', wordwrap( $title, $middleLength, '<br />') );
		if (isset( $newTitle[2] ) ) {
			$newTitle[1] .= ' ' . $newTitle[2];
			unset( $newTitle[2] );
		}
		if (!isset($newTitle[1]))
			$newTitle[1] = '';

		return $newTitle;
	}


	public static function splitParagraphMiddle($title)
	{
		$len = strlen($title);
		$space = strrpos($title," ",-$len/2);
		$col1 = substr($title,0,$space);
		$col2 = substr($title,$space);
		$response = [$col1, $col2];
		return $response;
	}
}