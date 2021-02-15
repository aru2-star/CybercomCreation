<?php
$user_data = [
    [
      "id" => 1,
      "name" => "Arunshi Gupta",
      "email" => "arunshigupta@gmail.com",
      "password" => "123",
      "address" => [
        "house_no" => "1",
        "flat" => "Apartment1",
        "dist" => "Maninagar",
        "city" => "Ahmnedabad",
       ]
    ],

    [
      "id" => 2,
      "name" => "Ankita Gupta",
      "email" => "ankitagupta11@gmail.com",
      "password" => "456",
      "address" => [
        "house_no" => "2",
        "flat" => "Apartment2",
        "dist" => "Isanpur",
        "city" => "Ahmnedabad",
       ]
    ],

    [
      "id" => 3,
      "name" => "Maansi Gupta",
      "email" => "maansigupta30@gmail.com",
      "password" => "789",
      "address" => [
        "house_no" => "3",
        "flat" => "Apartment3",
        "dist" => "Memnagar",
        "city" => "Ahmnedabad",
       ]
    ]
];

echo '<pre>';

foreach ($user_data as $key => $value) {
    foreach ($value as $key1 => $value1) {
        if(gettype($value1)=='array'){
            foreach($value1 as $key2=>$value2){
                if(gettype($value2)=='array'){
                    foreach($value2 as $key3=>$value3){
                        print_r($key3);
                        echo ':';
                        print_r($value3);
                        echo '<br>';
                    }
                }else{
                    print_r($key2);
                    echo ':';
                    print_r($value2);
                    echo '<br>';
                }
            }
        }else{
            print_r($key1);
            echo ':';
            print_r($value1);
            echo '<br>';
        }  
    }
    echo '<br>';
}

?>
