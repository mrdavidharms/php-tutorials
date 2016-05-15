<html>
    <p>
    <?php
    print rand();

    ?>
    </p>
    <p>
    <?php
    $name = "David";
    $new = substr($name, rand(0,strlen($name)));
    print $new[0]

    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.

    ?>
    </p>
</html>
