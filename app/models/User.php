<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'users';

	// j'autorise les champs username, email et password à être insérés dans la DB
	protected $fillable = array('username', 'email', 'password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	// fonction selfies qui permettra de récupérer les selfies d'un utilisateur
	// juste avec $user->selfies. Cela est possible grâce à la colonne user_id
	// présente dans la table selfie.
	public function selfies()
	{
		return $this->hasMany('Selfie');
	}

}
