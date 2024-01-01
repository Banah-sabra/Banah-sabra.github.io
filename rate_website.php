<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate Your Experience</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            max-width: 400px;
            width: 100%;
            text-align: center;
            margin: 2rem;
        }

        form {
            padding: 20px;
            box-sizing: border-box;
        }

        h3 {
            color: #333;
            margin-bottom: 20px;
        }

        .rating {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            font-size: 24px;
            color: #ddd;
            margin: 0 5px;
        }

        .rating input:checked ~ label {
            color: #ffcc00;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-link {
            text-decoration: none;
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-link:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<section class="form-container">
    <form action="" method="post">
        <h3>Rate Your Experience</h3>
        <div class="rating">
            <input type="radio" name="rating" value="1" id="star5" required><label for="star5">&#9733;</label>
            <input type="radio" name="rating" value="2" id="star4" required><label for="star4">&#9733;</label>
            <input type="radio" name="rating" value="3" id="star3" required><label for="star3">&#9733;</label>
            <input type="radio" name="rating" value="4" id="star2" required><label for="star2">&#9733;</label>
            <input type="radio" name="rating" value="5" id="star2" required><label for="star2">&#9733;</label>
        </div>
        <textarea name="feedback" placeholder="Add your feedback" required></textarea>
        
        <p> <a href="thanks.php" class="btn-link">rating</a>.</p>
        
    </form>
</section>

</body>
</html>
