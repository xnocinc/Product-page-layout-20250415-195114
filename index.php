<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="product-container">
			<img src="image.jpg" alt="Product Image" class="product-image">
			<div class="product-description">
				<h2>Product Name</h2>
				<p>This is a sample product description.</p>
			</div>
			<div class="pricing">
				<p><span>$99.99</span></p>
				<button>Add to Cart</button>
			</div>
		</div>
	</div>
</body>
</html>

<style>
	body {
		font-family: Arial, sans-serif;
		margin: 0;
		padding: 0;
	}

	.container {
		max-width: 1200px;
		margin: 40px auto;
		text-align: center;
	}

	.product-container {
		display: flex;
		flex-direction: column;
		align-items: center;
		padding: 20px;
		border: 1px solid #ddd;
		border-radius: 10px;
		box-shadow: 0 2px 4px rgba(0,0,0,.1);
	}

	.product-image {
		width: 100%;
		height: 200px;
		margin-bottom: 20px;
		border-radius: 10px 10px 0 0;
		box-sizing: border-box;
		padding: 10px;
		background-color: #f7f7f7;
	}

	.product-description {
		margin-top: 20px;
	}

	.pricing {
		margin-top: 20px;
	}

	.pricing button {
		background-color: #4CAF50;
		color: #fff;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

	.pricing button:hover {
		background-color: #3e8e41;
	}
</style>