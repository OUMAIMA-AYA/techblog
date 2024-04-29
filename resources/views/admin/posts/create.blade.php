<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
    <style>
        body {
            margin: 0 auto;
            padding: 0 auto;
        }

        nav {
            background-color:#f2f2f2;
            color: black;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
nav a {
    color: white;
    text-decoration: none;
    margin-right: 20px;
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

        input[type="text"],
        input[type="datetime-local"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"] {
            margin-right: 10px;
        }

        button[type="button"] {
            background-color: #ccc;
        }

    </style>
</head>
<body>
<nav>
<h2><span style="color: red;">T</span>E<span style="color: red;">C</span>H <BR>BLOG</h2>
    <ul>
        <li><a href="">posts</a></li>
        <li><a href="{{route('dashboard')}}">dashboard</a></li>
        <li><a href="{{route('login')}}">login</a></li>
        <li><a href="">categories</a></li>
        <li><a href="">users</a></li>
        <li><a href="">logout</a></li>
    </ul>
</nav><br><br>
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" >
            @csrf
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br>

            <label for="slug">Slug:</label><br>
            <input type="text" id="slug" name="slug"><br>

            <label for="category">Category:</label><br>
            <select id="category" name="category_id">
                <option value=""> --Select a Category--</option> 
                <option value="1">Science</option>
                <option value="2">computing</option>  
                <option value="3">Tech</option>
                <option value="3">web development</option>
                <option value="5">programming</option>
                <option value="6">gaming</option>
            </select><br>

            <label for="publication_date">Publication Date:</label><br>
            <input type="datetime-local" id="publication_date" name="publication_date"><br>

            <label for="excerpt">Excerpt:</label><br>
            <textarea id="excerpt" name="excerpt"></textarea><br>

            <label for="body">Content:</label><br>
            <textarea id="body" name="body"></textarea><br>

            <label for="cover_image">Cover Image:</label><br>
            <input type="text" id="cover_image" name="cover_image"><br>

            <label for="tags">Tags:</label><br>
            <input type="text" id="tags" name="tags"><br>

            <button type="submit ">Create</button>
            <button type="submit" name="create_and_another">Create & create another</button>
            <button type="button" onclick="window.history.back()">Cancel</button>
        </form>
    </div>
</body>
</html>
