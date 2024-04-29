<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
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

        form {
            margin-top: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }


    </style>
</head>
<body>
    <div class="container">
        <h1><span style="color: red;">T</span>E<span style="color: red;">C</span>H BLOG</h1>
        <form action="{{ route('login') }}" method="post">
    @csrf
    <input type="email" name="email" id="email"placeholder='Email'><br>
    <input type="password" name="password" id="password" placeholder='Password'><br>

    <input type="submit" value="SIGN IN">
</form>

    </div>
</body>
</html>
