<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
         body {
            margin: 0 auto;
            padding: 0 auto;
        }

        nav {
            background-color: #f2f2f2;
            color: black;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: black;
            text-decoration: none;
        }
        /* Centering the container */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .div1, .div2, .div3 {
            background-color: grey;
            width: 30%;
            height: 200px; 
            margin: 0 10px; 
        }
    </style>
</head>
<body>
    <nav>
    <h2><span style="color: red;">T</span>E<span style="color: red;">C</span>H <BR>BLOG</h2>
        <ul>
            <li><a href="{{ route('posts.index') }}">posts</a></li>
            <li><a href="{{ route('login') }}">login</a></li>
            <li><a href="">categories</a></li>
            <li><a href="">users</a></li>
            <li><a href="">logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
    </div>
</body>
</html>
