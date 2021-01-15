<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'users';
    protected $primary = 'user_id';
    protected $allowedFields = ['user_level', 'user_name','user_email','user_password','user_created_at'];
}