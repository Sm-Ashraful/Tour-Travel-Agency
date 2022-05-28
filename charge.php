<?php
  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Customer.php');
  require_once('models/Transaction.php');

  \Stripe\Stripe::setApiKey('sk_test_51Kfpn3F6eHEt5krVvyFBQkXwK0T79TTTbyAtvl4IABwMmAFjuCKhh4P8HzznPNuzFfWj3qCXXAbaAqRDsfTZsUk100d0tw7b3a');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_UNSAFE_RAW);

 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $amount = $POST['amount'];
 $description = $POST['description'];
 $package_id = $POST['index'];
 $destination = $POST['destination'];
 $no_of_member = $POST['no_of_member'];
 $arrival_date = $POST['arrival_date'];
 $leaving_date = $POST['leaving_date'];
 $token = $POST['stripeToken'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => (double)$amount,
  "currency" => "usd",
  "description" => $description,
  "customer" => $customer->id
));


// Customer Data
$customerData = [
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email,
  'destination' => $destination,
  'no_of_member' => $no_of_member,
  'arrival_date' => $arrival_date,
  'leaving_date' => $leaving_date,

];

// Instantiate Customer
$customer = new Customer();

// Add Customer To DB
$customer->addCustomer($customerData);


// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);

// Redirect to success
header('Location: index.php?tid='.$charge->id.'&product='.$charge->description).'&package='.$package_id;

?>

