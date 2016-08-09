<?php

namespace Klsandbox\AddressModel\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Klsandbox\AddressModel\Models\State
 *
 * @property integer $site_id
 * @property integer $country_id
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\State whereSiteId($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\State whereCountryId($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\State whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\State whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\State whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Klsandbox\AddressModel\Models\State whereName($value)
 * @mixin \Eloquent
 */
class State extends Model
{
    protected $fillable = ['country_id', 'name'];

    public static function area($state)
    {
        $area = strtolower($state);

        if (($area == 'sabah') || ($area == 'sarawak')) {
            return 'east';
        }

        return 'west';
    }

    public static function getAreaByStateId($stateId)
    {
        $stateModel = new self();
        $state = $stateModel->find($stateId);

        if ($state) {
            return self::area($state->name);
        }

        return 'west';
    }
}
