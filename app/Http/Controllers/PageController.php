<?php

namespace App\Http\Controllers;

class PageController extends Controller {
  
  public function getIndex() {
    return view('pages.welcome');
  }
  
  public function getAbout() {
    $first = 'Anuj';
    $last = 'Sachdeva';
    
    $fullname = $first . " " . $last;
    $email = 'anujsachdeva100@gmail.com';
    
    $data = [];
    $data['email'] = $email;
    $data['fullname'] = $fullname;
    return view('pages.about')->withData($data);
  }
  
  public function getContact() {
    return view('pages.contact');
  }
  
}

?>