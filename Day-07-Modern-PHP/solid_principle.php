<?php
// SOLID is acronym of:
//1.S(Single Responsiblity Principle): Every class is responsible for same task , not different one.
// class Solid_principle{
//     public function greetMessage(){
//         echo "Hi, This class is for only greet purpose.";
//         echo "\n";
//     }
// }

// $obj = new Solid_principle();
// $obj -> greetMessage();


// // 2. O(Open-Closed principle)
// //  A class should be open for extending functionality but closed for modify existing one.
// // Define a contract
// interface PaymentMethodInterface {
//     public function process();
// }

// class PayPalPayment implements PaymentMethodInterface {
//     public function process() {
//         return "Processing PayPal payment...";
//     }
// }

// // we can easily extended the functionality without modifying a single line of your existing core code.

// class StripePayment implements PaymentMethodInterface {
//     public function process() {
//         return "Processing Stripe payment...";
//     }
// }

// 3. L(Liskov Substitution Principle (LSP)) : Objects of a superclass should be replaceable with objects of its subclasses without breaking the application.

// class LegalDocument {
//     public function open() {
//         return "File contents as string";
//     }
// }

// // VIOLATION OF LSP
// class EncryptedDocument extends LegalDocument {
//     public function isLocked() {
//         return true; 
//     }
//     public function open() {
//         // The parent promises to return a string, 
//         // but this child returns boolean.
//         if ($this->isLocked()) {
//             return false; 
//         }

//         return "Decrypted contents";
//     }
// }

// $obje = new EncryptedDocument();
//  echo $obje->open();


// 4. I(Interface segregation principle)
//  It is better to use only interface for one contracts , don't use heavy interface for all contracts
// like
// Bad:
// interface SmartDeviceInterface {
//     public function print($document);
//     public function fax($document);
//     public function scan($document);
// }

// Good:
// interface PrinterInterface {
//     public function print($document);
// }

// interface ScannerInterface {
//     public function scan($document);
// }

// interface FaxInterface {
//     public function fax($document);
// }

// 5. D(Dependency Inversion)
// High-level modules should not depend on low-level modules. Both should depend on abstractions.

// Abstractions should not depend on details. Details should depend on abstractions.

// Low-level detail
// class MailchimpService {
//     public function sendEmail($to, $subject) { /* Send via Mailchimp API */ }
// }

// // High-level business logic
// class PasswordReset {
//     private $mailer;

//     // Even though we are using Dependency Injection here, 
//     // we are still violating Dependency Inversion because 
//     // we are tightly bound to Mailchimp!
//     public function __construct(MailchimpService $mailer) {
//         $this->mailer = $mailer;
//     }

//     public function reset() {
//         $this->mailer->sendEmail('user@test.com', 'Reset Link');
//     }
// }
// Why this breaks DIP:
// Your high-level logic (PasswordReset) is totally dependent on the low-level detail (MailchimpService). If Mailchimp changes their API, or if your company switches to AWS SES or SendGrid, you have to rewrite your core PasswordReset class.

// Use this way instead:

// // 1. The Abstraction (The contract)
// interface MailerInterface {
//     public function send($to, $subject);
// }

// // 2. High-level module depends ONLY on the abstraction
// class PasswordReset {
//     private $mailer;

//     // We type-hint the interface, NOT a specific company/service
//     public function __construct(MailerInterface $mailer) {
//         $this->mailer = $mailer;
//     }

//     public function reset() {
//         $this->mailer->send('user@test.com', 'Reset Link');
//     }
// }

// // 3. Low-level details conform to the abstraction
// class MailchimpService implements MailerInterface {
//     public function send($to, $subject) { /* Mailchimp logic */ }
// }

// class SendGridService implements MailerInterface {
//     public function send($to, $subject) { /* SendGrid logic */ }
// }


// Design Pattern
// PHP / Laravel patterns you’ll see often
// Pattern	    Real Example
// Singleton	Service Container
// Factory	    Model Factory
// Strategy	    Payment Gateway
// Observer	    Events / Listeners
// Repository	Data Access Layer
// Dependency Injection	Controllers
// Builder	   Query Builder
// Facade	    Laravel Facades