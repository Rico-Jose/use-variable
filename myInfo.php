<html>
    <head>
        <title>My Information</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <?php
            $name="Jose";
            $id="30019932";
            $phone_number="0449890115";
            $hobby="Reading";
        ?>
        <div id="container">
            <div id="header">
                <h1>My Information</h1>
            </div>
            <div id="content">
                <div id="nav">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a class="selected" href="">Home</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </div>
                <div id="main">
                    <h2>Name: <?php echo $name ?></h2>
                    <h2>ID: <?php echo $id ?></h2>
                    <p>Phone number: <?php echo $phone_number ?></p>
                    <p>Hobby: <?php echo $hobby ?></p>
                </div>
            </div>
            <div id="footer">
                Copyright &copy; 2020 Jose.
            </div>
        </div>
    </body>
</html>