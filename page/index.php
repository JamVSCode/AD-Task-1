<?php include "../components/header.php"; ?>

    <body style="background-image: url('assets/img/asgard.jpg'); background-size: cover; color: white; text-shadow: 2px 2px 4px black;">
        <img src="/page/assets/img/atreus.png" alt="Atreus" class="character-right">
        <h1>The Path to Ragnarok</h1>

        <?php
        $quest = "The prophecy foretells the batlle against the All-Father, Odin.";
        echo "<p>$quest</p>";

        //Loop
        $weapons = ["Leviathan Axe", "Blades of Chaos", "Draupnir Spear"];
        echo "<p>Kratos' Arsenal:</p><ul>";
        foreach ($weapons as $weapon) {
            echo "<li>$weapon - Forged for war.</li>";
        }
        echo "</ul>";
        ?>

        <a href="../index.php" class="enter-realm">Return to Midgard</a>

<?php include "../components/footer.php"; ?>