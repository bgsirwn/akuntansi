<?php
/**
 * RomanMonth generator
 */
class RomanMonths
{
    /**
     * asosiatif array bulan ke romawi
     * @var array
     */
    private static $arrayMonths = [
      "01" => "I",
      "02" => "II",
      "03" => "III",
      "04" => "IV",
      "05" => "V",
      "06" => "VI",
      "07" => "VII",
      "08" => "VIII",
      "09" => "IX",
      "10" => "X",
      "11" => "XI",
      "12" => "XII"
  ];

  /**
   * Convert bulan ke romawi
   * @param string $bulan convert to string in asosiatif array
   */
    public static function Convert($bulan)
    {
        if (array_key_exists($bulan, self::$arrayMonths)) {
            return self::$arrayMonths[$bulan];
        }
    }
}
