<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Your CSS styles */
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

        /* Style pour le titre "display" */
        h2 {
            margin-top: 20px;
        }

        /* Style pour le champ de recherche */
        input[type="search"] {
            padding: 5px;
            width: 200px;
        }

        /* Style pour le lien "new post" */
        .new_post {
            margin-top: 10px;
        }

        .new_post a {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px; 
            border-radius: 5px;
            font-size: 16px; 
            margin: 30px;
        }

        /* Style pour le titre "list of posts" */
        h1 {
            margin-top: 20px;
        }

        /* Style pour le tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            border-top: none;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style pour les boutons d'action */
        table button , input[type="submit"]{
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 5px;
        }

        .search-and-new {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .display {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
<form>
    <div class="display">
        <div><label for="display">Display:</label>
        <input type="number" id="display" name="display" style="width: 15%;"></div>
    
</form>
<br>
<div class="search-and-new">
    <input type="search" id="searchInput" placeholder="Search by posts">
    <div class="new_post"><a href="{{ route('posts.create') }}">New post</a></div>
</div></div><br>
<table border="1" id="postTable">
    <tr>
        <th>Category</th>
        <th>Title</th>
        <th>Author</th>
        <th>Status</th>
        <th>Creation Date</th>
        <th>Action</th>
    </tr>
    @foreach ($posts as $post)
    <tr class="post-row">
        <td>{{ $post->category->name }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->user->name }}</td>
        <td>New</td> 
        <td>{{ $post->created_at }}</td>
        <td>
        <button><a href="{{ route('posts.show', $post->id) }}" style="text-decoration: none;color:white;">Show</a></button>
            <button><a href="{{ route('posts.edit', $post->id) }}" style="text-decoration: none;color:white;">Update</a></button>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="text-decoration: none;color:white;">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<!--{{ $posts->links() }}-->


<script>
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        const rows = document.querySelectorAll('.post-row');
        rows.forEach(row => {
            const title = row.querySelector('td:nth-child(2)').textContent.toLowerCase().trim();
            if (title.includes(query)) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });

    document.getElementById('display').addEventListener('input', function() {
        var numRows = parseInt(this.value);
        var tableRows = document.querySelectorAll('#postTable tr');
        
        for (var i = 1; i < tableRows.length; i++) {
            if (i <= numRows) {
                tableRows[i].style.display = 'table-row';
            } else {
                tableRows[i].style.display = 'none';
            }
        }
    });
</script>

</body>
</html>
