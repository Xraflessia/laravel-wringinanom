<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterIncapacity extends Model
{
    protected $fillable = [
        'no_letter',
        'name',
        'tgl_lahir',
        'tempat_lahir',
        'gender',
        'nationality',
        'education',
        'job',
        'marriage',
        'nik',
        'religion',
        'address',
        'name_child',
        'tgl_lahir_child',
        'tempat_lahir_child',
        'gender_child',
        'education_child',
        'address_child',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($letter) {
    //         $currentYear = $letter->year ?? now()->year;

    //         // auto numbering when no_letter is empty
    //         if (empty($letter->no_letter)) {
    //             $lastLetter = self::where('year', $currentYear)
    //                 ->orderBy('no_letter', 'desc')
    //                 ->first();

    //             $letter->no_letter = $lastLetter ? $lastLetter->no_letter + 1 : 1;
    //         }

    //         // Ensure no duplicate no_letter within the same year
    //         $exist = self::where('no_letter', $letter->no_letter)
    //             ->where('year', $currentYear)
    //             ->where('id', '!=', $letter->id)
    //             ->exists();

    //         if ($exist) {
    //             throw new \Exception('The letter number {$letter->no_letter} already exist for the year {$year}');
    //         }
    //     });
    // }
}
