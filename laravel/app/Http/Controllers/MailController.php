<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {
      $data = array('name'=>"Noeypatt");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('s5935512027@phuket.psu.ac.th', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('s5935512027@phuket.psu.ac.th','Noeypatt');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"Noeypatt");
      Mail::send('mail', $data, function($message) {
         $message->to('s5935512027@phuket.psu.ac.th', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('s5935512027@phuket.psu.ac.th','Noeypatt');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('name'=>"Noeypatt");
      Mail::send('mail', $data, function($message) {
         $message->to('s5935512027@phuket.psu.ac.th', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\xampp\htdocs\LARAVEL\laravel\Dog.jpg');
         $message->attach('C:\xampp\htdocs\LARAVEL\laravel\test.txt');
         $message->from('s5935512027@phuket.psu.ac.th','Noeypatt');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}