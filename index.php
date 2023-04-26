<?php
    include_once 'header.php';
?>

                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
                }
                ?>
        <header>
            Types of jobs of offer.
        </header>

        <div class="main">
            <main>
                <table>
                   
                </table>
            </main>

            <aside class="right">
                <p>Right</p>
            </aside>
        </div>

<?php
    include_once 'footer.php';
?>
