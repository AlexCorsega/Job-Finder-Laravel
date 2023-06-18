<?php
namespace App\Enums;
enum ClassificationType:int{
    case Freelancer = 1;
    case Client = 2;
    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}