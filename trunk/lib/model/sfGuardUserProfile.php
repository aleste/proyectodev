<?php

class sfGuardUserProfile extends BasesfGuardUserProfile
{
     protected $user = null;

  public function __toString() {
    return $this->getApellido();
  }
   public function getGuardUser() {
    if (!$this->user) {
      $this->user = sfGuardUserPeer::retrieveByPk($this->getUserId());
    }
    return $this->user;
  }
}
