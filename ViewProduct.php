<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product Description</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">View Product Details</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="path_to_image.jpg" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <p id="productName">Product Name</p>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <p id="category">Category</p>
                </div>
                <div class="form-group">
                    <label for="price">Price (₱)</label>
                    <p id="price">Price</p>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <p id="quantity">Quantity</p>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <p id="description">Description</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
