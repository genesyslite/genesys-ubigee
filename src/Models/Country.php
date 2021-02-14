<?php

namespace GenesysLite\GenesysUbigee\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    public function getTable()
    {
        return config('genesysUbigee.table_names.countries', parent::getTable());
    }
    public function departments(): HasMany
    {
        return $this->hasMany(config('genesysUbigee.models.department'));
    }
}
