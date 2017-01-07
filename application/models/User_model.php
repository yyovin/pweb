<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function registeruser(){
      // var_dump($this->input->post());
        $data = [
                    'id' => date('U'),
                    'no_telp' => $this->input->post('phonenumber'),
                    'nama' => $this->input->post('name'),
                    'tgl_lahir' => $this->input->post('bday'),
                    'jenis_kelamin' => $this->input->post('gender'),
                    'nim' => $this->input->post('nim'),
                    'alamat' => $this->input->post('alamat'),
                    'email' =>  $this->input->post('email'),
                    'jurusan' =>  $this->input->post('jurusan'),
                    'user_name' =>  $this->input->post('username'),
                    'password' =>  password_hash( $this->input->post('password'), PASSWORD_BCRYPT ),
                ];

        $this->db->insert( 'users', $data );
    }

    public function namausersudahterdaftar( $namauser ){
        $query = $this->db->get_where( 'users', array( 'user_name' => $namauser) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }

    public function emailsudahterdaftar( $emailaddr ){
        $query = $this->db->get_where( 'users', array( 'email' => $emailaddr) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }


}


?>
