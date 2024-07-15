<?php
include_once 'connection.php';

date_default_timezone_set("Asia/Kolkata");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'vk0604110@gmail.com';                     //SMTP username
  $mail->Password   = 'rjclpuzhupzfjkbt';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


  // rjcl puzh upzf jkbt
  //Recipients
  $mail->setFrom('vk0604110@gmail.com', 'Contact Form');
  $mail->addAddress($email, $name);     //Add a recipient
  // $mail->addAddress('ellen@example.com');               //Name is optional
  // $mail->addReplyTo('info@example.com', 'Information');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  //Attachments
  // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Registration Successful';
  $mail->Body    = 'You have registered at our website using' . $email . 'and' . $name . '<b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {

      &,
      &::before,
      &::after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
    }

    .slider {
      max-width: 600px;
      width: auto;
      height: 260px;
      margin: 0 auto;
      position: relative;
      overflow: hidden;
      padding: 0 25px;

      &__inner {
        height: 100%;
        width: 100%;
      }

      &__button {
        position: absolute;
        width: 20px;
        height: 20px;
        top: 50%;
        margin-top: -10px;
        z-index: 120;
        background: #001380;
        color: #fff;
        opacity: 0.4;
        cursor: pointer;

        text-align: center;

        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;

        box-shadow: -1px 1px 5px 0px #000;
        -webkit-box-shadow: -1px 1px 5px 0px #000;
        -moz-box-shadow: -1px 1px 5px 0px #000;

        & .fas {
          display: inline-block;
          height: 100%;
          line-height: 20px;
          font-size: 16px;
        }

        &:hover {
          opacity: 1;
          text-decoration: none;
        }

        &--next {
          right: 2px;
        }

        &--prev {
          left: 2px;
        }
      }

      &__image {
        display: block;
        width: 300px;
        height: 200px;
        position: absolute;
        border: solid 1px #000;
        top: 30px;

        transition: ease-in-out 0.3s;
        -webkit-transition: ease-in-out 0.3s;
        -moz-transition: ease-in-out 0.3s;
      }
    }

    .image {
      &--1 {
        left: 50%;
        margin-left: -150px;
        opacity: 1;
        z-index: 50;

        transform: scale(1);
        -ms-transform: scale(1);
        -moz-transform: scale(1);
        -webkit-transform: scale(1);

        -webkit-filter: blur(0px);
        filter: blur(0px);

        transition: filter 0ms,
          transform 300ms,
          left 400ms ease-in-out,
          right 400ms ease-in;

        -webkit-transition: filter 0ms,
          transform 300ms,
          left 400ms ease-in-out,
          right 400ms ease-in;

        -moz-transition: filter 0ms,
          transform 300ms,
          left 400ms ease-in-out,
          right 400ms ease-in;
      }

      &--2 {
        left: 45%;
        margin-left: -170px;
        opacity: 0.85;
        z-index: 40;

        transform: scale(0.8);
        -ms-transform: scale(0.8);
        -moz-transform: scale(0.8);
        -webkit-transform: scale(0.8);

        -webkit-filter: blur(5px);
        filter: blur(5px);

        transition: transform 0.4s;
        -webkit-transition: transform 0.4s;
        -moz-transition: transform 0.4s;
      }

      &--3 {
        left: 40%;
        margin-left: -190px;
        opacity: 0.6;
        z-index: 30;

        transform: scale(0.6);
        -ms-transform: scale(0.6);
        -moz-transform: scale(0.6);
        -webkit-transform: scale(0.6);

        -webkit-filter: blur(7px);
        filter: blur(7px);

        transition: ease-in-out 0.5s;
        -webkit-transition: ease-in-out 0.5s;
        -moz-transition: ease-in-out 0.5s;
      }

      &--4 {
        right: 40%;
        margin-right: -190px;
        opacity: 0.6;
        z-index: 10;

        transform: scale(0.6);
        -ms-transform: scale(0.6);
        -moz-transform: scale(0.6);
        -webkit-transform: scale(0.6);

        -webkit-filter: blur(7px);
        filter: blur(7px);

        transition: ease-in-out 0.5s;
        -webkit-transition: ease-in-out 0.5s;
        -moz-transition: ease-in-out 0.5s;
      }

      &--5 {
        right: 45%;

        margin-right: -170px;
        opacity: 0.85;
        z-index: 20;

        transform: scale(0.8);
        -ms-transform: scale(0.8);
        -moz-transform: scale(0.8);
        -webkit-transform: scale(0.8);

        -webkit-filter: blur(5px);
        filter: blur(5px);

        transition: transform 0.4s;
        -webkit-transition: transform 0.4s;
        -moz-transition: transform 0.4s;
      }
    }


    @media(max-width: 580px) {
      .slider {
        height: 200px;

        &__image {
          width: 200px;
          height: 135px;
        }
      }

      .image {

        &--2,
        &--3 {
          left: 50%;
        }

        &--4,
        &--5 {
          right: 50%;
        }

        &--1 {
          margin-left: -100px;
        }

        &--2 {
          margin-left: -130px;
        }

        &--3 {
          margin-left: -160px;
        }

        &--4 {
          margin-right: -160px;
        }

        &--5 {
          margin-right: -130px;
        }
      }
    }
  </style>
</head>

<body>
  <div id="slider" class="slider">
    <div class="slider__inner">
      <img src="https://s1.1zoom.ru/prev2/540/Fields_Sunflowers_Closeup_539973_300x200.jpg" alt="Sunflowers" data-index="1" class="slider__image image--1">
      <img src="https://vocabulary.ru/images/Hopetoun_falls.jpg" alt="Waterfall" data-index="2" class="slider__image image--2">
      <img src="https://s1.1zoom.ru/prev2/546/Germany_Rivers_Fields_Moselle_Hill_545275_300x200.jpg" alt="River" data-index="3" class="slider__image image--3">
      <img src="https://s1.1zoom.ru/prev2/547/China_Taiwan_Mountains_Forests_Fields_Roads_Night_546672_300x200.jpg" alt="Land" data-index="4" class="slider__image image--4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Quba_385.jpg/300px-Quba_385.jpg" alt="Mountains" data-index="5" class="slider__image image--5">
    </div>
    <div class="slider__action">
      <div id="prev" class="slider__button slider__button--prev">
        <i class="fas fa-angle-left"></i>
      </div>
      <div id="next" class="slider__button slider__button--next">
        <i class="fas fa-angle-right"></i>
      </div>
    </div>
  </div>
  <div id="slider" class="slider">
    <div class="slider__inner">
      <img src="https://s1.1zoom.ru/prev2/540/Fields_Sunflowers_Closeup_539973_300x200.jpg" alt="Sunflowers" data-index="1" class="slider__image image--1">
      <img src="https://vocabulary.ru/images/Hopetoun_falls.jpg" alt="Waterfall" data-index="2" class="slider__image image--2">
      <img src="https://s1.1zoom.ru/prev2/546/Germany_Rivers_Fields_Moselle_Hill_545275_300x200.jpg" alt="River" data-index="3" class="slider__image image--3">
      <img src="https://s1.1zoom.ru/prev2/547/China_Taiwan_Mountains_Forests_Fields_Roads_Night_546672_300x200.jpg" alt="Land" data-index="4" class="slider__image image--4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Quba_385.jpg/300px-Quba_385.jpg" alt="Mountains" data-index="5" class="slider__image image--5">
    </div>
    <div class="slider__action">
      <div id="prev" class="slider__button slider__button--prev">
        <i class="fas fa-angle-left"></i>
      </div>
      <div id="next" class="slider__button slider__button--next">
        <i class="fas fa-angle-right"></i>
      </div>
    </div>
  </div>
  <script>
    "use strict";

    // forEach FIX for IE 
    (function() {
      if (typeof NodeList.prototype.forEach === "function") return false;
      NodeList.prototype.forEach = Array.prototype.forEach;
    })();

    //document.documentElement.setAttribute("data-agent", navigator.userAgent);

    // Slider prototype object
    function Slider(element, imageSelector) {
      //Image selector class or default
      this.imageClass = imageSelector || '.slider__image';

      //Array with images in slider
      this.images = element.querySelectorAll(this.imageClass);

      //Previous image
      this.previous = function() {
        this.images.forEach(function img(elem, index) {
          let Index = parseInt(elem.getAttribute('data-index')),
            IN, addClass;
          if (Index < 5) {
            IN = Index + 1;
          } else {
            IN = 1;
          }
          addClass = 'image--' + IN;
          elem.className = elem.className.replace(/image--[0-9]/, '');
          elem.setAttribute('data-index', IN);
          elem.classList.add(addClass);

          if (addClass == 'image--1') {
            elem.classList.add('active');
          } else {
            elem.classList.remove('active');
          }
        });
      };

      //Next image
      this.next = function() {
        this.images.forEach(function(elem, index) {
          let Index = parseInt(elem.getAttribute('data-index')),
            IN, addClass;
          if (Index > 1) {
            IN = Index - 1;
          } else {
            IN = 5;
          }
          addClass = 'image--' + IN;
          elem.className = elem.className.replace(/image--[0-9]/, '');
          elem.setAttribute('data-index', IN);
          elem.classList.add(addClass);

          if (addClass == 'image--1') {
            elem.classList.add('active');
          } else {
            elem.classList.remove('active');
          }
        });
      };
    };

    const d = document,
      slider = d.getElementById('slider'), //Slider container
      next = d.getElementById('next'), //Next slide button 
      prev = d.getElementById('prev'); //Previous slide button
    let isWheel; //Global var for setTimeout

    //Creating carousel
    let carousel = new Slider(slider);

    //Button 
    next.addEventListener('click', function(e) {
      carousel.next();
    }, true);
    prev.addEventListener('click', function(e) {
      carousel.previous();
    }, true);

    //Adding sliding when scroll
    slider.addEventListener('wheel', function(e) {
      e.preventDefault;

      if (e.deltaY > 0) {
        carousel.next();
      } else {
        carousel.previous();
      }

      //Getting alt text (name) from .active slide
      let active = this.getElementsByClassName('active'),
        name = active[0].getAttribute('alt');

      //Stoping latest timeout
      window.clearTimeout(isWheel);

      //creating new timeout for current active slide
      isWheel = window.setTimeout(function(e) {
        alert(name);
      }, 1500);
    });

    //Adding swipe events to inner slider container
    let sliderInner = slider.querySelector('.slider__inner');
    swipedetect(sliderInner, function(swipedir) {
      if (swipedir == 'left') {
        carousel.previous();
      }
      if (swipedir == 'right') {
        carousel.next();
      }
    });

    // Library for swipe detect
    // credit: http://www.javascriptkit.com/javatutors/touchevents2.shtml
    function swipedetect(el, callback) {
      let touchsurface = el,
        swipedir,
        startX,
        startY,
        distX,
        distY,
        dist,
        threshold = 150, //required min distance traveled to be considered swipe
        restraint = 100, // maximum distance allowed at the same time in perpendicular direction
        allowedTime = 300, // maximum time allowed to travel that distance
        elapsedTime,
        startTime,
        handleswipe = callback || function(swipedir) {}

      touchsurface.addEventListener('touchstart', function(e) {
        let touchobj = e.changedTouches[0]
        swipedir = 'none'
        dist = 0
        startX = touchobj.pageX
        startY = touchobj.pageY
        startTime = new Date().getTime() // record time when finger first makes contact with surface
        e.preventDefault()
      }, false)

      touchsurface.addEventListener('touchmove', function(e) {
        e.preventDefault() // prevent scrolling when inside DIV
      }, false)

      touchsurface.addEventListener('touchend', function(e) {
        let touchobj = e.changedTouches[0]
        distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface
        distY = touchobj.pageY - startY // get vertical dist traveled by finger while in contact with surface
        elapsedTime = new Date().getTime() - startTime // get time elapsed
        if (elapsedTime <= allowedTime) { // first condition for awipe met
          if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint) { // 2nd condition for horizontal swipe met
            swipedir = (distX < 0) ? 'left' : 'right' // if dist traveled is negative, it indicates left swipe
          } else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint) { // 2nd condition for vertical swipe met
            swipedir = (distY < 0) ? 'up' : 'down' // if dist traveled is negative, it indicates up swipe
          }
        }
        handleswipe(swipedir)
        e.preventDefault()
      }, false)
    }
  </script>
</body>

</html>