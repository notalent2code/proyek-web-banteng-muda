<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'email';
    protected $allowedFields = ['email','password','level', 'foto_profil'];
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data){
        if (isset($data['data']['password'])){
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getUser($email = false)
    {
      if($email === false){
        return $this->findAll();
      } else {
        return $this->getWhere(['email' => $email]);
      }
    }
  
    public function saveUser($data)
    {
      $query = $this->db->table($this->table)->insert($data);
      return $query;
    }

    public function saveImage($data, $email){
      $query = $this->db->query("UPDATE users SET foto_profil = '$data' where email = '$email'");
      return $query;
    }
  
    public function updateUser($data, $email)
    {
      $query = $this->db->table($this->table)->update($data, array('email' => $email));
      return $query;
    }
  
    public function deleteUser($email)
    {
      $query = $this->db->table($this->table)->delete(array('email' => $email));
      return $query;
    }
}