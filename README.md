# Form to email.

Receive the information sent through a form in to your email.

## Getting Started

Clone or download the project and upload to a webserver.

### Prerequisites

* PHP 7+
* Gmail account with https://www.google.com/recaptcha - If you use gmail as SMTP server ensure you have the security for third apps activated (https://myaccount.google.com/lesssecureapps)
* Unzip whole content of the project PHPMailer at the folder PHPMailer.

### Configuration

Fill with your recaptcha key:
```
data-sitekey="YOUR_KEY_CAPTCHA_HERE"
```
Configure your SMPT data
```
      $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.example.example';  // Specify main and backup SMTP servers
	    $mail->Username = 'example@example.example';                 // SMTP username
	    $mail->Password = 'your_password_of_your_email';                           // SMTP password
```

## Built With

* [PHP](http://php.net/)
* [Bootstrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/)

## Third party apps

* [PHPMailer](https://github.com/PHPMailer/PHPMailer)

## Author

* **VGzsysadm** - *https://sysadm.es* - [@VGzsysadm](https://github.com/VGzsysadm)


