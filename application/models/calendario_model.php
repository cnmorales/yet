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

  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v){ return $this->$k = $v; }


}

?>
