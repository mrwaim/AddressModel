<?php

namespace Klsandbox\AddressModel\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Klsandbox\AddressModel\Models\Country
 *
 * @property integer $site_id
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\Country whereSiteId($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\Country whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\Country whereName($value)
 * @mixin \Eloquent
 */
class Country extends Model
{
    protected $fillable = ['name'];

    public static function Malaysia()
    {
        return self::where(['name' => 'Malaysia'])->first();
    }

    public static function Singapore()
    {
        return self::where(['name' => 'Singapore'])->first();
    }

    public static function Brunei()
    {
        return self::where(['name' => 'Brunei'])->first();
    }
}
