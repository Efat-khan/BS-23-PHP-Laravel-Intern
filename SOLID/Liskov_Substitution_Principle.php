<!-- Liskov Substitution Principle (LSP)
In simple words:
✅ A subclass should behave just like its parent class.
❌ A subclass should NOT break or change how the parent class works. -->

<?php
interface Payment
{
  public function pay($amount);
}

// Online payment 
interface OnlinePayment extends Payment
{
  public function processOnline();
}

// Offline payment 
interface OfflinePayment extends Payment
{
  public function processOffline();
}

// Implementing online
class CreditCardPayment implements OnlinePayment
{
  public function pay($amount)
  {
    return "Paid $amount via Credit Card";
  }

  public function processOnline()
  {
    return "Processing Credit Card payment online.";
  }
}

class PayPalPayment implements OnlinePayment
{
  public function pay($amount)
  {
    return "Paid $amount via PayPal";
  }

  public function processOnline()
  {
    return "Processing PayPal payment online.";
  }
}

// Implementing offline payments
class CashPayment implements OfflinePayment
{
  public function pay($amount)
  {
    return "Paid $amount in cash";
  }

  public function processOffline()
  {
    return "Processing cash payment offline.";
  }
}

// Function to process any payment
function processPayment(Payment $payment, $amount)
{
  echo $payment->pay($amount);
}

// Now everything works correctly
processPayment(new CreditCardPayment(), 100);
processPayment(new PayPalPayment(), 500);
processPayment(new CashPayment(), 300);
?>