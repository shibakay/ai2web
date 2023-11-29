<!DOCTYPE html>
<html>
<head>
    <title>New Post</title>
</head>
<body>
    <h1>Create New Post</h1>
    <main>
    <form action="upload_post.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" required></textarea><br>

        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image"><br>

        <input type="submit" value="Submit">
    </form>
    </main>
</body>
</html>
