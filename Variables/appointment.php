<!-- Nika -->
<html>
<link rel="stylesheet" href="variables.css">

<body class="variables_body ">
    <div class="contact_form-s">

        <?php
        if (isset($_GET['name']) && isset($_GET['number']) && isset($_GET['text'])) {
            echo '<h1> Hello ' . htmlspecialchars($_GET['name']) . ' <br><br>  Number - ' . htmlspecialchars($_GET['number']) . ' </h1>';
            echo '<h1> Your reservation has been accepted </h1> ';
            echo '<h1> With DR. ' . (isset($_GET['Doname']) ? htmlspecialchars($_GET['Doname']) : "Unknown") . '<br><br> To ' . 
                 (isset($_GET['Dename']) ? htmlspecialchars($_GET['Dename']) : "Unknown") . '</h1>';
        } elseif (isset($_GET['name']) && isset($_GET['number'])) {
            echo '<h1> Hello ' . htmlspecialchars($_GET['name']) . '</h1>';
            echo '<h1> You missed the Symptoms, please try again ! </h1> ';
        } elseif (isset($_GET['name']) && isset($_GET['text'])) {
            echo '<h1> Hello ' . htmlspecialchars($_GET['name']) . '</h1>';
            echo '<h1> You missed your number, please try again ! </h1> ';
        } elseif (isset($_GET['text']) && isset($_GET['number'])) {
            echo '<h1> Hello Unknown </h1>';
            echo '<h1> You missed some links, please try again ! </h1> ';
        } else {
            echo '<h1> Hello ' . (isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "Unknown") . ' <br> </h1>';
            echo '<h1> You missed the links, Try again ! </h1> ';
        }
        ?>

        <form action="../index.php">
            <button type="submit" class="variables_button">
                <h1 class="submit_text"> Go to the main </h1>
            </button>
        </form>

    </div>
</body>
</html>
