 <!-- Interface Segregation Principle (ISP)
 Rule: Don’t force a class to implement methods it doesn’t use. -->

 <?php
  interface Payment
  {
    public function pay($amount);
  }
  interface PaymentGateway
  {
    public function process();
  }
  // Implementing online

  class CreditCardPayment implements Payment, PaymentGateway
  {
    public function pay($amount)
    {
      return "Paid $amount via Credit Card";
    }

    public function process()
    {
      return "Processing Credit Card payment online.";
    }
  }
  // Implementing offline
  class BankTransferPayment implements Payment, PaymentGateway
  {
    public function pay($amount)
    {
      return "Paid $amount via Bank Transfer";
    }

    public function process()
    {
      return "Processing Bank Transfer payment online.";
    }
  }

  $bankTransfer = new BankTransferPayment();
  echo $bankTransfer->pay(100);
  echo "<br/>";
  echo $bankTransfer->process();
  echo "<br/><br/><hr/>";
  $creditCard = new CreditCardPayment();
  echo $creditCard->pay(200);
  echo "<br/>";
  echo $creditCard->process();
  ?>