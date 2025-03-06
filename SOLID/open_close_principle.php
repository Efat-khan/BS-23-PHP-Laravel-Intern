<!-- Open/Closed Principle (OCP)
Rule: A class should be open for extension but closed for modification. -->
<?php
class Discount
{
  public function getDiscount($amount, $type)
  {
    if ($type == "percentage") {
      return $amount * 0.2;
    } else if ($type == "fixed") {
      return $amount - 5;
    }
  }
}

$discount = new Discount();
echo $discount->getDiscount(100, "fixed");
echo "<br/><br/><hr/>";

interface IDiscount
{
  public function getDiscount($type, $amount);
}
class ParcentageDiscount implements IDiscount
{
  public function getDiscount($type, $amount)
  {
    return $amount * 0.2;
  }
}
class FixedDiscount implements IDiscount
{
  public function getDiscount($type, $amount)
  {
    return $amount - 5;
  }
}

// NEW discount methode
class GstDiscount implements IDIscount
{
  public function getDiscount($type, $amount)
  {
    return $amount * 0.1;
  }
}

class DiscountCalculation
{
  public function calculate(IDiscount $discount, $type, $amount)
  {
    return $discount->getDiscount($type, $amount);
  }
}

$discountCalculation = new DiscountCalculation();
echo $discountCalculation->calculate(new ParcentageDiscount(), "percentage", 200);
echo "<br/>";
echo $discountCalculation->calculate(new FixedDiscount(), "fixed", 200);

// now i donot have to change other parameters in the class DiscountCalculation
echo "<br/>";
echo $discountCalculation->calculate(new GstDiscount(), "gst", 200);
?>