<?php
// An interface in PHP defines a contract that classes must adhere to by implementing its methods.
// Significance:
    // Ensures consistency across different classes.
    // Facilitates the implementation of multiple interfaces in a single class.
    // Enhances flexibility and decoupling in code design

interface Notifiable {
    public function send($message);
}

// Implementing SMSNotification
class SMSNotification implements Notifiable {
    public function send($message) {
        // Code to send SMS
        echo "Sending SMS: {$message}\n";
    }
}

// Implementing EmailNotification
class EmailNotification implements Notifiable {
    public function send($message) {
        // Code to send Email
        echo "Sending Email: {$message}\n";
    }
}

// Implementing PushNotification
class PushNotification implements Notifiable {
    public function send($message) {
        // Code to send Push Notification
        echo "Sending Push Notification: {$message}\n";
    }
}

// Usage
function notifyUser(Notifiable $notification, $message) {
    $notification->send($message);
}

$sms    = new SMSNotification();
$email  = new EmailNotification();
$push   = new PushNotification();

notifyUser($sms, "Your package has been shipped.");
echo "<br><br>";
notifyUser($email, "Welcome to our service!");
echo "<br><br>";
notifyUser($push, "You have a new follower.");

?>