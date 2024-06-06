<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Product Table</h2>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price (₱)</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><img src="path_to_image1.jpg" alt="Product 1" class="img-fluid" width="50"></td>
                    <td>Product 1</td>
                    <td>Category 1</td>
                    <td>₱500.00</td>
                    <td>100</td>
                    <td>This is a description of Product 1.</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <button class="btn btn-info btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><img src="path_to_image2.jpg" alt="Product 2" class="img-fluid" width="50"></td>
                    <td>Product 2</td>
                    <td>Category 2</td>
                    <td>₱1000.00</td>
                    <td>200</td>
                    <td>This is a description of Product 2.</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <button class="btn btn-info btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
