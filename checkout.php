<?php
include_once('db_config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .checkout-form {
            background-color: #444;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0069d9;
        }

        .question-mark {
            position: relative;
            top: -2px;
            right: 10px;
            font-size: 16px;
            cursor: help;
        }

        textarea#address {
            resize: none;
            width: 350px;
            height: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
    </style>
</head>
<body>
    <div class="checkout-form">
        <h2>CHECKOUT FORM</h2>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" placeholder="Your Name">
            </div>
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact" placeholder="Your Contact Number">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your Email Address">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" required></textarea>
        </div>
        <button>PROCEED</button>
    </div>
</body>
</html>