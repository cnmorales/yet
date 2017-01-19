<?php
class calendario_model extends CI_Model{

  private $calendario_id;
  private $nombre;
  private $enabled;
  private $usuario_id;
  private $cliente_id;

  function __construct(){
    parent::__construct();
  }

  public function crear($nombre,$cliente_id,$enabled,$usuario_id){
    //Inserta datos en la tabla usuario
         $data = array(
            'nombre'=>$nombre,
            'cliente_id'=>$cliente_id,
            'enabled'=>'1',
            'usuario_id'=>$usuario_id
         );
        return $this->db->insert('calendario', $data);
  }



}

?>
