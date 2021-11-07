<?php
    $items = array("index", "github", "about", "contact");

    foreach ($items as $item)
    {
        if (isset($_GET['page']) && $_GET['page'] == $item)
        {
            echo '<a href="?page=' . $item . '" class="active"> ' . $item . '</a></br>';
            $activePage = $item . ".php";
        }
        else
        {
            echo '<a href="?page=' . $item . '"> ' . $item . '</a></br>';
        }
    }

    if (isset($activePage))
    {
        include $activePage;   
    }
    else
    {
        include "index.php";
    }
?>