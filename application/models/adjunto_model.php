<?php
class adjunto_model extends CI_Model{
  private $adjunto_id;
  private $descripcion;
  private $ruta;
  private $evento_id;

  function __construct(){
    parent::__construct();
  }

  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v){ return $this->$k = $v; }


}

?>
