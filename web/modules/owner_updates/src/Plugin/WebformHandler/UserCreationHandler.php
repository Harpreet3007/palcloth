<?php
namespace Drupal\owner_updates\Plugin\WebformHandler;

use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;
use Drupal\webform\Entity\WebformSubmission;
/**
 * Webform submission action handler.
 *
 * @WebformHandler(
 *   id = "usercreate",
 *   label = @Translation("User Create"),
 *   category = @Translation("Action"),
 *   description = @Translation("Creates a user after submission"),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \Drupal\webform\Plugin\WebformHandlerInterface::SUBMISSION_OPTIONAL,
 * )
 */

class UserCreationHandler extends WebformHandlerBase {
  /**
   * {@inheritdoc}
   */
  public function postSave(WebformSubmissionInterface $webform_submission, $update = TRUE) {
        $user = \Drupal\user\Entity\User::create();
        $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
        $user_name = $webform_submission->getElementData('email');
        $email = $webform_submission->getElementData('email');
        $first_name = $webform_submission->getElementData('first_name');
        $last_name = $webform_submission->getElementData('last_name');
        $phone_no = $webform_submission->getElementData('phone_no');
        $password = $webform_submission->getElementData('password');
        $address = $webform_submission->getElementData('address');
        $investment = $webform_submission->getElementData('investment');
        // dd($user_name, $email, $first_name, $last_name, $phone_no, $password, $address, $investment);
        // // Mandatory user creation settings
        $user->enforceIsNew();
        $user->setPassword($password);
        $user->setEmail($email);
        $user->setUsername($user_name); // This username must be unique and accept only a-Z,0-9, - _ @ .
        $user->set("langcode", $language);
        // // Optional settings
        $user->set("field_first_name", $first_name);
        $user->set("field_last_name", $last_name);
        $user->set("field_phone_number", $phone_no);
        $user->set("field_address", $address);
        $user->set("field_investment", $investment);
        $user->activate();
        // // Add a custom role in case you need one
        $user->addRole('partner');
        // //Save user
        $user->save();

  }
}
