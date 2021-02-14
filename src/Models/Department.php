<?php

namespace GenesysLite\GenesysUbigee\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    protected $with = ['provinces'];
    public $incrementing = false;
    public $timestamps = false;

    public function getTable()
    {
        return config('genesysUbigee.table_names.departments', parent::getTable());
    }

    static function idByDescription($description)
    {
        $department = Department::where('description', $description)->first();
        if ($department) {
            return $department->id;
        }
        return '15';
    }

    public function provinces()
    {
        return $this->hasMany(config('genesysUbigee.models.province'));
    }
}
