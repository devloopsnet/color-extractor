<?php

namespace League\ColorExtractor;

class Color
{
    /**
     * @param bool $prependHash = true
     */
    public static function fromIntToHex(int $color, bool $prependHash = true): string
    {
        return ($prependHash ? '#' : '').sprintf('%06X', $color);
    }

    public static function fromHexToInt(string $color): int
    {
        return hexdec(ltrim($color, '#'));
    }

    public static function fromIntToRgb(int $color): array
    {
        return [
          'r' => $color >> 16 & 0xFF,
          'g' => $color >> 8 & 0xFF,
          'b' => $color & 0xFF,
        ];
    }

    /**
     * @return int
     */
    public static function fromRgbToInt(array $components)
    {
        return ($components['r'] * 65536) + ($components['g'] * 256) + $components['b'];
    }
}
