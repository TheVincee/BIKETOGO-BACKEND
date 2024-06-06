<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Add New Product</h2>
    <form>
      <div class="form-group">
        <label for="productName">Product Name</label>
        <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
      </div>
      <div class="form-group">
        <label for="productCategory">Category</label>
        <select class="form-control" id="productCategory" required>
          <option value="">Select category</option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing</option>
          <option value="home">Home & Kitchen</option>
          <!-- Add more categories as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="productPrice">Price</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">₱</span>
          </div>
          <input type="number" class="form-control" id="productPrice" placeholder="Enter product price" required>
        </div>
      </div>
      <div class="form-group">
        <label for="productQuantity">Quantity</label>
        <input type="number" class="form-control" id="productQuantity" placeholder="Enter product quantity" required>
      </div>
      <div class="form-group">
        <label for="productDescription">Description</label>
        <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description"></textarea>
      </div>
      <div class="form-group">
        <label for="productPhoto">Upload Photo</label>
        <input type="file" class="form-control-file" id="productPhoto" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
  </div>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
