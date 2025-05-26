<?php include "./components/header.php"; ?>

    <body style="background-image: url('assets/img/midgard.jpg'); background-size: cover; color: white; text-shadow: 2px 2px 4px black;">
        <img src="assets/img/kratos.png" alt="Kratos" class="character-left">
        <h1>Welcome, Warrior!</h1>

        <?php
        // Declarations
        $character = "Kratos";
        $realm = "Midgard";
        $strength = 100;
        $weapon1 = "Leviathan Axe";
        $weapon2 = "Blades of Chaos";

        echo "<p>In the realm of $realm, the mighty $character wields his $weapon1 and $weapon2</p>";

        //Conditional
        echo "<p>Is $character ready?</p>";
        if ($strength > 90) {
            echo "<p>$character is strong! Ready for battle.</p>";
        } else {
            echo "<p>$character must sharpen his blade first.<p>";
        }

        //Loop
        $enemies = ["Draugr", "Berserker", "Odin", "Fenrir", "Thor"];
        echo "<p>Foes of Ragnarok:</p><ul>";
        foreach ($enemies as $enemy) {
            echo "<li>$enemy approaches...</li>";
        }
        echo "</ul>";
        ?>

        <a href="page/index.php" class="enter-realm">Enter the Realm</a>

<?php include "./components/footer.php"; ?>