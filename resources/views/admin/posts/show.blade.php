<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
    <style>
        /* Your CSS styles */
        body {
            margin: 0 auto;
            padding: 0 auto;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        p {
            margin-bottom: 20px;

        }
    </style>
</head>
<body>
<div class="container">
    <h1>Show Post</h1>
    <p><strong>Title:</strong> {{ $post->title }}</p>
    <p><strong>Slug:</strong> {{ $post->slug }}</p>
    <p><strong>Category:</strong> {{ $post->category->name }}</p>
   
