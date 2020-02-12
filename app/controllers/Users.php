<?php
class Users extends Controller
{
  public function __construct()
  {
  }

  public function register()
  {
    // check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form
    } else {
      // Init data
      $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'cofirm_password_err' => ''
      ];
      //load view
      $this->view('users/register', $data);
    }
  }
}
