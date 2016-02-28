<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	/**
     * Enable soft deletes for a model
     * @var string
     */
    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activities';

    /**
     * Atributos que se pueden insertar en Mass-Assignment
     * @var array
     */
    protected $fillable = ['name', 'reference', 'description', 'tolerance', 'acceptance_requirements', 'enable'];

}
