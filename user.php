<?php

require_once "koneksi.php";

/**
 * Object User
 */
class User extends Koneksi
{

    public $username;
    public $password;

    //Login user
    public function login()
    {
        $db = $this->getKoneksi();
        try
        {
            // Ambil data dari database
            $query = $db->prepare("SELECT * FROM user WHERE username = '$this->username'");
            $query->execute();
            $data = $query->fetch();

            // Jika jumlah baris > 0
            if($query->rowCount() > 0){
                // jika password yang dimasukkan sesuai dengan yg ada di database
                if($data['password'] == $this->password){
                    session_start();

                    //simpan informasi user login
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['password'] = $data['password'];
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

   

}

?>
