<html>

<head>
    <?php
    $root="../../";
    require_once($root."import.php");
    ?>
    <style>
        #savedPages {
            display: none !important;
        }

    </style>
    <script src="app.js"></script>
</head>

<body>
    <header>
        <?php include_once("../header.php"); ?>
    </header>
    <main>
        <?php include_once("main.php"); ?>
        <input class="hide" id="copier">
    </main>
    <footer>
        <?php include_once("../footer.php"); ?>
    </footer>
</body>

</html>
