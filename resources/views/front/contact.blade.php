@extends('layouts.front.front')
@section('title', 'تواصل معنا')
@section('content')
<?php
//Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Assign Variables
        $user = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $sub = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        
     // Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        
        $headers = 'From: ' . $mail . '\r\n';
        $myEmail = 'contact@pubstudiopro.ma';
        $subject = 'Contact Form';
            mail($myEmail, $subject, $msg, $headers);
            $user = '';
            $mail = '';
            $sub  = '';
            $msg  = '';
            $success = '<div class="alert alert-success"><i class="fa fa-check"></i> '.sent.'</div>'; 
    }
?>
 <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-info">
            <h1>تواصل معنا</h1>
            <p>فريقنا متواجد لإسعادكم بخدمتنا ، لديه الخبرة و المهارات اللازمة لمساعدتكم في تنمية نشاطكم التجاري.</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="mail">
            <h2>اترك لنا رسالة</h2>
            <p>لا تتردد في ملء النموذج الخاص بك ، وسنقوم بالرد عليك في أقرب وقت ممكن</p>
            <?php if(isset($success)) {echo $success;} ?>
            <form class="form-group" id="muForm" method="POST" action="{{route('front.contact')}}">
              <div class="row">
                <div class="col-md-4">
                  <input class="form-control"  type="text" name="name" id="name" required="required" placeholder="الإسم الكامل">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="email" name="email" id="email" required="required" placeholder="البريد الإلكتروني">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="text" name="subject" id="tel" placeholder="الموضوع">
                </div>
              </div>
              <textarea class="form-control" name="message" id="comment" required="required" placeholder="الرسالة"></textarea>
              <button type="submit" name="submit" value="Envoyer"><i class="ft-navigation"></i> إرسال</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection