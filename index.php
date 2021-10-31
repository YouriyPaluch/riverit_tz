<?php

$db = new mysqli('localhosr', '', '', 'users_tz');
$user = [];
for($i=0; i<=1000000; $i++){
    $query='SELECT age, name, email, phone FROM users WHERE id = $i;';
    $user[] = mysqli_fetch_assoc($db->query($query));
}
$userJSON = json_encode($user);

PUT test{
    "mappings":{
        "doc":{
            "properties":{
                "age":{"type": "integer"},
                "name":{"type": "text"},
                "email":{"type": "email"},
                "phone":{"type": "integer"}
                }
            }
        }
    }
}

PUT test/_doc/users{
    $userJSON;
}
