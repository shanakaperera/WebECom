<?php

return [
   //globals +2 view or controller
   'globals' => [
      'add'                   => 'Add a new product',
      'loading_product_info'  => 'Loading product information...',
      'categories'            => 'Categories',
      'digital_item'          => 'Digital item',
      'features'              => 'Features',
      'key'                   => 'Key',
      'new_product'           => 'New product',
      'price'                 => 'Price',
      'product_information'   => 'Product information',
      'description'           => 'Description',
      'comments'              => 'Comments',
      'save'                  => 'Submit',
      'see_key'               => 'See key',
      'see_keys'              => 'See keys',
      'software'              => 'Software',
      'stock'                 => 'Stock',
      'view_details'          => 'View details',
      'my_dashBoard'          => 'My DashBoard',
      'publications'          => 'Publications',
       'views'                => 'Views',
       'content'              => 'Content',
       'price_after_discount' => 'The final value is %i (after a ##%% discount)', // i%  and ##%%  are mandatory
   ],
   //inputs
   'inputs_view' => [
      'amount'              => 'Amount',
      'bar_code'            => 'Barcode',
      'brand'               => 'Brand',
      'condition'           => 'Condition',
      'description'         => 'Description',
      'product_tags'        => 'Product Tags',
      'download_example'    => 'Download an example',
      'gift_card_option'    => '',
      'key_option'          => 'This option allows you to load a text file with a list of keys.<br/>Each key will be sold separately.<br/>Use the same format as in the example.<br/>The product will be disabled when all keys have been sold.',
      'low_stock'           => 'Low Stock',
      'name'                => 'Name',
      'software_key_option' => 'This option allows you to load a downloadable archive.<br/>For safety we provides safe routes downloads.<br/>Extensions allowed: .rar .zip<br/>Optionally must upload a text file with a list of keys.<br/>Each key is sold separately.<br/>Use the same format shown.<br/>The product will be disabled when all keys have been sold.',
      'software_option'     => 'This option allows you to load a downloadable archive.<br/>For safety we provides safe routes downloads.<br/>Extensions allowed: .rar .zip',
   ],
   'show_view' => [
      'key_info_show'      => 'This product is a software key.<br/>The originality depends exclusively on the seller.<br/>The key will be delivered after having made your purchase.',
      'status_inactive'    => 'This product is not available in the store.',
       'recent_reviews'    => 'Most recent customer reviews',
   ],
   'showKeysVirtuals_view' => [
      'list_keys'          => 'keys List',
   ],
   'showDetailsProductInCart_view' => [
      'keys'            => 'Keys',
      'product_details' => 'Details of products in shopping cart',
      'quantity'        => 'Qty',
      'sold_by'         => 'Sold by',
   ],
   'controller' => [
      'gift_card'          => 'Gift Card',
      'item'               => 'Item',
      'may_invalid_keys'   => 'One or more keys may be invalid.',
      'new'                => 'New',
      'refurbished'        => 'Refurbished',
      'review_keys'        => 'Please review your keys.',
      'saved_successfully' => 'Product successfully saved.',
      'select_category'    => 'Select a category',
      'software_key'       => 'Software with key',
      'used'               => 'Used',
   ],
   'virtualProductsController_controller' => [
      'key_been_sold'      => 'This key has already been sold.',
   ],
   'virtualProductOrdersController_controller' => [
      'no_stock'           => 'This product does not have stock',
   ],
   //no specific
   'brand'             => 'Brand',
   'color'             => 'Color',
   'colors'            => 'Colors',
   'dimensions'        => 'Dimensions',
   'images'            => 'Images',
   'model'             => 'Model',
   'prices'            => 'Prices',
   'product_not_exist' => 'Product is not registered in our site',
   'video'             => 'Video',
   'weight'            => 'Weight',
   'form_create_title' => 'Create a new products',
   'form_edit_title'   => 'Updating ":prod" information and features',
   'barcode_label'     => 'Barcode',

   //Product Groups
   'product_group'                       => 'Product Group',
   'products_grouped_with'               => 'Products Grouped With',
   'product_successfully_grouped'        => 'Product Successfully Grouped',
   'products_already_grouped'            => 'Products already Grouped',
   'products_name'                       => 'Products Name',
   'delete_from_group'                   => 'Delete from Group',
   'product_was_deleted_from_this_group' => 'The product was deleted from this group',
   'products_group_for'                  => 'Group for',
   'products_group_list'                 => 'Group list',
];
