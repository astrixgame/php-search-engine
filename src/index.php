<?php
    $searches = json_decode(file_get_contents("search.json"), true);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Search Engine</title>
    </head>
    <body>
        <form action="" method="GET">
            <input type="text" name="q" placeholder="Search..">
            <input type="submit" value="Search">
        </form><br><hr><br>

        <?php
            $existArr = [];
            if(str_contains($_GET['q'], " ")) {
                $queryArr = explode(" ", strtolower($_GET['q']));
                foreach($queryArr as $query) {
                    foreach($searches as $key => $value) {
                        $srch = strtolower($key);
                        if(str_contains($query, $srch) || str_contains($srch, $query) || str_contains(strtolower($value["description"]), $query) || str_contains(strtolower($value["keywords"]), $query)) {
                            $isExist = false;
                            foreach($existArr as $exist) {
                                if($exist == $key) {
                                    $isExist = true;
                                    break;
                                }
                            }
                            if(!$isExist) {
                                $existArr[] = $key;
                                echo $key . "<br>";
                            }
                        }
                    }
                }
            } else {
                $query = strtolower($_GET['q']);
                foreach($searches as $key => $value) {
                    $srch = strtolower($key);
                    if(str_contains($query, $srch) || str_contains($srch, $query) || str_contains(strtolower($value["description"]), $query) || str_contains(strtolower($value["keywords"]), $query)) {
                        echo $key . "<br>";
                    }
                }
            }

        ?>

    </body>
</html>
