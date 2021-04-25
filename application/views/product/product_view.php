<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>product_name</th>
                        <th>product_categorie</th>
						<th>description</th>
                        <th>unit_in_stock</th>
                        <th>product Image</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $row) { ?>
  
                    <tr>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><?php echo $row['product_categorie'] ?></td>
						<td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['unit_in_stock'] ?></td>
                        <td><img height="100" width="100" src="<?php echo $row['image'] ?>"></td>
                        <td>
                            <a href="<?php echo base_url() ?>edit_product/<?php echo $row['id'] ?>">edit</a>
                            <a href="<?php echo base_url() ?>delete_product/<?php echo $row['id'] ?>">delete</a>
                        </td>
                    </tr>	

                    <?php  } ?>				
				
                </tbody>
            </table>
</body>
</html>