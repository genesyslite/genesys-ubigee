<?php

namespace GenesysLite\GenesysUbigee\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $with = ['districts'];
    public $incrementing = false;
    public $timestamps = false;

    public function getTable()
    {
        return config('genesysUbigee.table_names.provinces', parent::getTable());
    }

    static function idByDescription($description)
    {
        $province = Province::where('description', $description)->first();
        if ($province) {
            return $province->id;
        }
        return '1501';
    }

    public function districts()
    {
        return $this->hasMany(config('genesysUbigee.models.district'));
    }

    public function department()
    {
        return $this->belongsTo(config('genesysUbigee.models.department'));
    }

}
