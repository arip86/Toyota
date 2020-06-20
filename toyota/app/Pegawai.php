<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = ['nama','agama','alamat', 'avatar'];
    public function getAvatar(){
    	if(!$this->avatar){
    		return asset ('images/default.png');

    	}
    	return asset ('images/'.$this->avatar);
    }
}
