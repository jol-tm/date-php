<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        height: 100vh;
        text-align: center;
    }
    h1 {
        margin: 0;
    }
</style>
<?php
    header("Refresh: 1");
    echo "<h1>Data: " . date("Y/m/d H:i:s", time()) . "</h1>";
?>