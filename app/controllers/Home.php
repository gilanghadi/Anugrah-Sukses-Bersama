<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = 'HOME';
    $this->view('home/dashboard', $data);
  }

  public function send()
  {
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $message = $_POST['message'];
      // $UUID = password_hash('+6288293692407', PASSWORD_DEFAULT);
      // $whatsapp = $UUID;
      header("Location:https://api.whatsapp.com/send?phone=+6288293692407&text=From:%20$name%20Message:%20$message");
    }
    header('Location:' + BASEURL + '/ASB/');
  }
}
