<!-- B] Write a PHP script to display numeric, associative and multidimensional
array with for each loop. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Indexed Arrays</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .array-container {
            background-color: #f8f9fa;
            margin: 10px 0;
            padding: 20px;
            border-radius: 5px;
        }
        .array-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="array-container">
        <div class="array-title">Colors:</div>
        <?php
            $colors = array("Red", "Green", "Blue");
            foreach($colors as $color) {
                echo $color . "<br>";
            }
        ?>
    </div>

    <div class="array-container">
        <div class="array-title">Ages:</div>
        <?php
            $ages = array("Peter" => "22", "Clark" => "32", "John" => "28");
            foreach($ages as $name => $age) {
                echo $name . ": " . $age . "<br>";
            }
        ?>
    </div>

    <div class="array-container">
        <div class="array-title">Contacts:</div>
        <?php
            $contacts = array(
                array(
                    "name" => "Peter Parker",
                    "email" => "peterparker@mail.com",
                ),
                array(
                    "name" => "Clark Kent",
                    "email" => "clarkkent@mail.com",
                ),
                array(
                    "name" => "Harry Potter",
                    "email" => "harrypotter@mail.com",
                )
            );
            foreach($contacts as $contact) {
                echo "Name: " . $contact["name"] . "&emsp;&emsp;" . "     ,  Email: " . $contact["email"] . "<br>";
            }
        ?>
    </div>
</body>
</html>




<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Indexed, Associative and Multidimentional Arrays</title>
</head>
<body>
    <?php
        // Define an indexed array
        $colors = array("Red", "Green", "Blue");

        // Print the array
        print_r($colors); 
    ?>

    <?php
        // Define an associative array
        $ages = array("Peter" => "22", "Clark" => "32", "John" => "28");

        // Print the array
        print_r($ages); 
    ?>

    <?php
        // Define a multidimensional array
        $contacts = array(
            array(
                "name" => "Peter Parker",
                "email" => "peterparker@mail.com",
            ),
            array(
                "name" => "Clark Kent",
                "email" => "clarkkent@mail.com",
            ),
            array(
                "name" => "Harry Potter",
                "email" => "harrypotter@mail.com",
            )
        );

        // Print the array
        print_r($contacts); 
    ?>
</body>
</html>
 -->

<!-- 
 <!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Indexed Arrays</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .array-container {
            background-color: #f8f9fa;
            margin: 10px 0;
            padding: 20px;
            border-radius: 5px;
        }
        .array-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="array-container">
        <div class="array-title">Colors:</div>
        <?php
            $colors = array("Red", "Green", "Blue");
            print_r($colors); 
        ?>
    </div>

    <div class="array-container">
        <div class="array-title">Ages:</div>
        <?php
            $ages = array("Peter" => "22", "Clark" => "32", "John" => "28");
            print_r($ages); 
        ?>
    </div>

    <div class="array-container">
        <div class="array-title">Contacts:</div>
        <?php
            $contacts = array(
                array(
                    "name" => "Peter Parker",
                    "email" => "peterparker@mail.com",
                ),
                array(
                    "name" => "Clark Kent",
                    "email" => "clarkkent@mail.com",
                ),
                array(
                    "name" => "Harry Potter",
                    "email" => "harrypotter@mail.com",
                )
            );
            print_r($contacts); 
        ?>
    </div>
</body>
</html> -->
