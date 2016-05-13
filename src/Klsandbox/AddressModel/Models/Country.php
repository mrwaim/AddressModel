<?php

namespace Klsandbox\AddressModel\Models;

use Klsandbox\SiteModel\Site;
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

    use \Klsandbox\SiteModel\SiteExtensions;

    public static function Malaysia()
    {
        return Country::where(['name' => 'Malaysia', 'site_id' => Site::id()])->first();
    }

    public static function Singapore()
    {
        return Country::where(['name' => 'Singapore', 'site_id' => Site::id()])->first();
    }

    public static function Brunei()
    {
        return Country::where(['name' => 'Brunei', 'site_id' => Site::id()])->first();
    }

}
