<?php
  // Static properties and methods belong to the class itself rather than any particular instance.
  // Use Cases:
     //  Tracking information shared across all instances (e.g., total number of objects created).
     //  Implementing utility or helper functions.
     //  Maintaining configuration settings or constants.

  class User {
      // Static property to track the total number of users
      private static $totalUsers = 0;
  
      // Instance property
      private $username;
  
      public function __construct($username) {
          $this->username = $username;
          self::$totalUsers++; // Increment the static user count
      }
  
      // Static method to retrieve the total number of users
      public static function getTotalUsers() {
          return self::$totalUsers;
      }
  
      // Instance method to display the username
      public function getUsername() {
          return $this->username;
      }
  
      // Static utility method
      public static function displayWelcomeMessage() {
          echo "Welcome to the User Management System!\n";
      }
  }
  
  // Usage
  User::displayWelcomeMessage(); // Calling static method without creating an instance
  
  $user1 = new User("alice");
  $user2 = new User("bob");
  $user3 = new User("charlie");
  
  echo "Total registered users: " . User::getTotalUsers() . "\n"; // Accessing static property via static method
  echo "<br><br>";
  echo "User 1: " . $user1->getUsername() . "\n";
  echo "<br><br>";
  echo "User 2: " . $user2->getUsername() . "\n";
  echo "<br><br>";
  echo "User 3: " . $user3->getUsername() . "\n";
  
  ?>
?>  