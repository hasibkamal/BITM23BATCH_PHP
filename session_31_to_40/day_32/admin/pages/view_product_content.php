<?php 
$product_id = $_GET['product_id'];
$query_result = $obj_sup_admin->select_product_info_by_id($product_id);

$product_info = mysqli_fetch_assoc($query_result);


?>


<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Product goes here</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2></h2>
        
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                
                    <tr>
                        <th class="center">Product Id</th>
                        <td class="center"><?php echo $product_info['product_id']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Product Name</th>
                        <td class="center"><?php echo $product_info['product_name']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Product Price</th>
                        <td class="center"><?php echo $product_info['product_price']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Category Name</th>
                        <td class="center"><?php echo $product_info['category_name']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Manufacturer Name</th>
                        <td class="center"><?php echo $product_info['manufacturer_name']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Product Short Description</th>
                        <td class="center"><?php echo $product_info['product_short_description']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Product Long Description</th>
                        <td class="center"><?php echo $product_info['product_long_description']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Product Quantity</th>
                        <td class="center"><?php echo $product_info['stock_quantity']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Product SKU</th>
                        <td class="center"><?php echo $product_info['product_sku']; ?></td>
                    </tr>
                    <tr>
                        <th class="center">Product image</th>
                        <td class="center"><img src="<?php echo $product_info['product_image']; ?>" /></td>
                    </tr>
                    
            </table>            
        </div>
    </div><!--/span-->
</div>