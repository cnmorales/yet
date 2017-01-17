<?php
class usuario_model extends CI_Model{

  private $usuario_id;
  private $username;
  private $password;
  private $email;
  private $enabled;

  function __construct(){
    parent::__construct();
  }


  public function agregar_usuario($nombre,$apellido,$email,$clave){
    //Inserta datos en la tabla usuario
         $data = array(
            'username'=>$nombre,
            'password'=>$clave,
            'email'=>$email,
            'enabled'=>'1'
         );
         $this->db->insert('usuario', $data);
  }


  public function usuario_loguear($user,$password){
       $this->db->select('usuario_id, username, password');
       $this->db->from('usuario');
       $this->db->where('username',$user);
       $this->db->where('password',$password);
       $consulta = $this->db->get();
       $resultado = $consulta->result_array();
       return $resultado;
    }


}

?>
