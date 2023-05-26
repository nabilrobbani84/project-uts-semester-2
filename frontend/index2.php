<?php
include_once '../admin/dbkoneksi.php';
include_once 'top.php';
include_once 'categories.php';
include_once 'featured_product.php';
include_once 'assets/model/produk.php';


?>
<div id="layoutSidenav_content">
    <main>
<div class="container-fluid px-4">

<?php
error_reporting(0);
$hal = $_GET['hal'];
if($hal == 'dashboard'){
    include_once 'dashboard.php';
} else if( !empty($hal)){
    include_once '' .$hal.'.php';
} else {
    include_once 'dashboard.php';
}

?>
</div>
</main>
</div>
</div>


<?php
include_once 'footer.php';
?>