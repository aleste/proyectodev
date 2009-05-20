<?php

/**
 * usuario actions.
 *
 * @package    sf_sandbox
 * @subpackage usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class usuarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_guard_user_profile_list = sfGuardUserProfilePeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sfGuardUserProfileForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new sfGuardUserProfileForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sf_guard_user_profile = sfGuardUserProfilePeer::retrieveByPk($request->getParameter('id')), sprintf('Object sf_guard_user_profile does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserProfileForm($sf_guard_user_profile);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($sf_guard_user_profile = sfGuardUserProfilePeer::retrieveByPk($request->getParameter('id')), sprintf('Object sf_guard_user_profile does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserProfileForm($sf_guard_user_profile);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sf_guard_user_profile = sfGuardUserProfilePeer::retrieveByPk($request->getParameter('id')), sprintf('Object sf_guard_user_profile does not exist (%s).', $request->getParameter('id')));
    $sf_guard_user_profile->delete();

    $this->redirect('usuario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sf_guard_user_profile = $form->save();

      $this->redirect('usuario/edit?id='.$sf_guard_user_profile->getId());
    }
  }
}
