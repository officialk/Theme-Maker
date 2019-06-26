<html>

<head>
    <?php
    $root="../../";
    require_once($root."import.php");
    ?>
    <style>
        #trainingPage,
        #savedHeader {
            display: none !important;
        }

    </style>
    <script src="app.js"></script>
</head>

<body onload="createTheme()">
    <header>
        <?php include_once("../header.php"); ?>
    </header>
    <main>
        <?php include_once("main.php"); ?>
    </main>
    <footer>
        <?php include_once("../footer.php"); ?>
    </footer>
</body>

</html>
