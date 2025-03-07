<?php
// Step 1: Define an abstraction (interface)
interface CalculatorInterface
{
  public function add(int $a, int $b): int;
}

// Step 2: Implement the interface in a concrete class
class SimpleCalculator implements CalculatorInterface
{
  public function add(int $a, int $b): int
  {
    return $a + $b;
  }
}

// Step 3: High-level module depends on abstraction (not concrete class)
class CalculatorService
{
  private CalculatorInterface $calculator;

  // Dependency Injection via Constructor
  public function __construct(CalculatorInterface $calculator)
  {
    $this->calculator = $calculator;
  }

  public function calculateSum(int $a, int $b): int
  {
    return $this->calculator->add($a, $b);
  }
}

// Step 4: Client Code
$calculator = new SimpleCalculator();
$service = new CalculatorService($calculator);

echo "Sum: " . $service->calculateSum(5, 10); // Output: Sum: 15
