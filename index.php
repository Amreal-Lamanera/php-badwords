<?php
    // try: /?banned_word=war
    $text = 'The Golden Order has been broken. <br><br>
 

    Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between. <br>
    In the Lands Between ruled by Queen Marika the Eternal, the Elden Ring, the source of the Erdtree, has been shattered.<br>
    Marika\'s offspring, demigods all, claimed the shards of the Elden Ring known as the Great Runes, and the mad taint of their newfound strength triggered a war: The Shattering. A war that meant abandonment by the Greater Will.<br>
    And now the guidance of grace will be brought to the Tarnished who were spurned by the grace of gold and exiled from the Lands Between. Ye dead who yet live, your grace long lost, follow the path to the Lands Between beyond the foggy sea to stand before the Elden Ring. <br><br>
    And become the Elden Lord.';


    $ban = $_GET['banned_word'];
    $rep = '***';
    $newText = str_replace($ban, $rep, $text);

    ?>

    <h3>Paragrafo originale: </h3>

    <p> <?= $text; ?> </p>

    <span><strong>Parola vietata: </strong><?= $ban; ?>.</span> <br>
    <span><strong>Il paragrafo originale è lungo: </strong><?= strlen($text); ?> caratteri.</span>

    <h3>Nuovo paragrafo: </h3>

    <p> <?= $newText; ?> </p>

    <span><strong>Il nuovo paragrafo è lungo: </strong><?= strlen($newText); ?> caratteri.</span>