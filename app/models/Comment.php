<?php

class Comment extends Eloquent {


	public function user ()
	{
		return $this->belongsTo('User');
	}

	public function selfie ()
	{
		return $this->belongsTo('Selfie');
	}

}
