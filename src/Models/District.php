<?php

namespace GenesysLite\GenesysUbigee\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    public function getTable()
    {
        return config('genesysUbigee.table_names.districts', parent::getTable());
    }

    static function idByDescription($description, $province_id)
    {
        $district = District::where('description', $description)
                            ->where('province_id', $province_id)
                            ->first();
        if ($district) {
            return $district->id;
        }
        return '150101';
    }

    public function province()
    {
        return $this->belongsTo(config('genesysUbigee.models.province'));
    }

}
