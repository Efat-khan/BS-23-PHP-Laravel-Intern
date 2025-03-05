<!--  Namespaces Help
Avoids name conflicts between different libraries.
Organizes code in a structured way.
Makes large applications easier to manage. -->
<?php
require 'user.php';
require 'admin.php';

use App\Model\Admin\User as Admin;
use App\Model\User;

$user = new User('Efat', 'efat@gmail.com');
echo $user->get_name();
echo "<br/>";
$admin = new Admin('Admin', 'admin@gmail.com');
echo $admin->get_name();
?>



<?php
// Namespaces Help
echo "<br/>";
require 'product.php';

use App\Product\{Product, ProductCategory};

$product = new Product('Laptop', 50000, 10);
$productCategory = new ProductCategory('Electronics', $product->name);
echo $productCategory->get_name().'-'.$productCategory->get_products();

?>