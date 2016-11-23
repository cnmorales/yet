<?php
class contacto_model extends CI_Model{

  private $contacto_id;
  private $nombre;
  private $email;
  private $enabled;
  private $telefono;
  private $cliente_id;

  function __construct(){
    parent::__construct();
  }

  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v){ return $this->$k = $v; }


}

?>
