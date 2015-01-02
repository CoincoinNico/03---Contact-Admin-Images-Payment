<?php

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Selfie extends Eloquent implements StaplerableInterface {

  use EloquentTrait;

  protected $guarded = array('id');
	protected $fillable = array('picture', 'title', 'user_id', 'price');


	public function user ()
	{
		return $this->belongsTo('User');
	}

	public function __construct(array $attributes = array()) {
    $this->hasAttachedFile('picture', [
      'styles' => [
        'prompt' => '380',
        'thumb' => '100'
       ],
      'default_url' => '/:attachment/:style/missing.jpg'
    ]);

    parent::__construct($attributes);
	}


}
