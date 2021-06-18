<?php
class Cars {

}

$my_classes = get_declared_classes(); # All the declared classes from PHP.

foreach ($my_classes as $my_class) {
    echo $my_class . "<br>";
}
