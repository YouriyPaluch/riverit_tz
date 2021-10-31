<?php
$searchData = [];
if(!empty($_GET['age'])){
    $searchData['age'] = $_GET['age'];
}
if(!empty($_GET['name'])){
    $searchData['name'] = $_GET['name'];
}
if(!empty($_GET['email'])){
    $searchData['email'] = $_GET['email'];
}
if(!empty($_GET['phone'])){
    $searchData['phone'] = $_GET['phone'];
}
$searchDataJSON = json_encode($searchData);
GET test/users/_search{
    "query":{
        "match_phrase":{
            $searchDataJSON,
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get" action>
    <label>Age:
    <input type="text" name="age"/>
    </label>
    <label>Name:
    <input type="text" name="name"/>
    </label>
    <label>Email:
    <input type="text" name="email"/>
    </label>
    <label>Phone:
    <input type="text" name="phone"/>
    </label>
    <input type="submit" value="Search">
</form>
</body>
</html>