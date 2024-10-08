<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="img/vo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Add a Travel Offer</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1e90ff, #ff7f50);
            color: white;
            text-align: center;
            animation: backgroundAnim 10s ease infinite;
        }

        input::placeholder {
            color: black;
        }

        @keyframes backgroundAnim {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        h1 {
            color: #ff7f50;
            padding: 20px;
            font-size: 2.5rem;
            animation: fadeIn 2s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        form {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            top: 50px;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-size: 1.1rem;
            color: #333;
        }

        input,
        select {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: calc(100% - 30px);
            margin-bottom: 15px;
            background: #fff;
            font-size: 1rem;
            transition: box-shadow 0.3s, border-color 0.3s;
        }

        input:focus,
        select:focus {
            outline: none;
            box-shadow: 0 0 8px #ff7f50;
            border-color: #ff7f50;
        }

        button {
            background-color: #ff7f50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #1e90ff;
            transform: scale(1.05);
        }

        input[type="checkbox"] {
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-row label {
            flex: 1;
            font-size: 1rem;
            color: #333;
        }

        .form-row input,
        .form-row select {
            flex: 2;
        }

        /* Price section styles */
        .price-section {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .price-section label {
            flex: 1;
            font-size: 1rem;
            color: #333;
            text-align: left;
        }

        .price-section .price-input {
            display: flex;
            align-items: center;
            flex: 2;
        }

        .price-section .price-input input {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 100%;
            background: #fff;
            font-size: 1rem;
            margin-right: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        .price-section .price-input .currency-symbol {
            background: #ff7f50;
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-size: 1rem;
            margin-right: 10px;
            width: 80px;
        }
    </style>
</head>

<body style="background-image: url(img/6999045.jpg);">
    <h1>Add a Travel Offer</h1>
    <form id="form" action="verif.php" method="post">
        <div class="form-row">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="title">
            <p id="er1"></p>
        </div>

        <div class="form-row">
            <label for="des">Destination:</label>
            <input type="text" id="des" name="des" required placeholder="Destination">
            <p id="er2"></p>
        </div>

        <div class="form-row">
            <label for="date">Departure Date:</label>
            <input type="date" id="date" name="date" required>
            <p id="er3"></p>
        </div>

        <div class="form-row">
            <label for="re">Return Date:</label>
            <input type="date" id="re" name="re" required>
            <p id="er4"></p>
        </div>

        <div class="price-section">
            <label for="price" style="margin-top: 15px;">Price:</label>
            <div class="price-input">
                <input type="text" id="price" name="price" placeholder="0.00" style="margin-top: 16px;">
            </div>
            <p id="er5"></p>
        </div>

        <div class="form-row">
            <label for="av">Availability:</label>
            <input type="checkbox" id="av" name="av">
        </div>

        <div class="form-row">
            <label for="ca">Category:</label>
            <select id="ca" name="ca">
                <option value="Adventure">Adventure</option>
                <option value="Culture">Culture</option>
                <option value="Sport">Sport</option>
                <option value="Camping">Camping</option>
            </select>
        </div>

        <button type="submit" id="send" name="send">Add Offer</button>
        <button type="reset" id="reset" style="margin-left: 90px;">Reset Information</button>
    </form>
    <script src="add.js"></script>
</body>

</html>

