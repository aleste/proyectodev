<?php

class sfGuardUserProfile extends BasesfGuardUserProfile
{
     protected $user = null;

/*  public function __toString() {
    return $this->getApellido();
  }*/
   public function getGuardUser() {
    if (!$this->user) {
      $this->user = sfGuardUserPeer::retrieveByPk($this->getUserId());
    }
    return $this->user;
  }
    public function getNombreCompleto() {
        $nombre = $this->getGuardUser()->getProfile()->getNombre();
        $apellido = $this->getGuardUser()->getProfile()->getApellido();
        return $nombre. ', '. $apellido;
    }

}
