<?php

class myUser extends sfGuardSecurityUser
{
      protected $aProfile;

  /**
   * getUserId function
   *
   * @return integer
   * @author Pablo Sánchez <pablo.sanchez@aranova.es>
   **/
  public function getUserId() {
    return parent::getGuardUser()->getId();
  }

}
