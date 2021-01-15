<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class TiketModel extends Model{
    protected $table = 'tiket';
    protected $primary = 'id';
    protected $allowedFields = ['id', 'penyedia', 'waktu','jurusan','kelas','harga', 'kursi'];
}