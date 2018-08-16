<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/js/main.js"></script>   
</head>
<body>
    
<h1>
    This is the Front Page.
</h1>

<ul class="menu">
    <li><a href="/">Homepage</a></li>
    <li><a href="/api">API URL</a></li>
    <li><a href="/api/users">API Users</a></li>
</ul>

<div>
    <p>This is the page Content! :)</p>
    <?= $mainUserTable ?>

    <p>AJAX/JSON Data is gonna be displayed below, from the Makeshift API</p>
    
    <div class="json" style="border:1px solid red; padding:10px;
    margin:10px;">JSON Data will appear here. (It may be too fast!)</div>
</div>

</body>
</html>