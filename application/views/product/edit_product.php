<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Custom fonts for this template-->
  <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
            <img src="assets/admin/img/login.jpeg">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Products!</h1>
              </div>

              <?php foreach ($data as $row) { ?>


              <form class="user" action="<?php echo base_url() ?>update_product/<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">


                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="product_name" id="exampleFirstName" placeholder="Product Name" value="<?php echo $row['product_name'] ?>">
                  </div>
                  <div class="col-sm-6 ">
                     <select class="form-control" name="product_categorie">
                      <option><?php echo $row['product_categorie'] ?></option>
                      <option value="1">New Arrival</option>
                      <option value="2">Most Popular</option>
                      <option value="3">Trending</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-user" name="description" placeholder="Description"><?php echo $row['description'] ?></textarea> 
                </div>

                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  	 <input type="text" class="form-control" name="unit_in_stock" id="exampleFirstName" placeholder="Units In Stock" min="1" value="<?php echo $row['unit_in_stock'] ?>">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  	<input type="file" name="image" class="form-control"><img src="<?php echo $row['image'] ?>">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Update Product
                </button>
                <hr>
              </form>

                 <?php  } ?>    

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

   <!-- Bootstrap core JavaScript-->
  <script src="assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/admin/js/sb-admin-2.min.js"></script>
</body>
</html>