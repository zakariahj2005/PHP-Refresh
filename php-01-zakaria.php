
<body>
    <form action="" method="GET">
        <h3>wat is je naam?</h3>
        <input type="text" name="vul_in" >
        <input type="submit" value="submit">
    </form>

    <?php
    echo "welkom treug " . $_GET["vul_in"] . "!"
    ?>
</body>
</html>

