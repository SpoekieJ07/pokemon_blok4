<?php


include 'header.php';
include 'navbar.php';

if(isset($_GET['submit'])) {

    if(isset($_GET['zoek_term'])){

        if (empty($_GET['zoek_term'])) {
            echo "Name is required";
            exit;
        }

        if (strlen($_GET['zoek_term']) <= 3) {
            $zoek_term = $_GET['zoek_term'];
            require 'database_connection.php';
            $sql = "SELECT name, type FROM cards WHERE name LIKE '%$zoek_term%'";
            $result = mysqli_query($conn, $sql);
            $cards = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    // Perform search logic here
    }
}

?>

<!-- Centered and styled form -->
<div style="display: flex; justify-content: center; align-items: center; min-height: 60vh;">
  <form action="" style="background: #f8f8f8; padding: 2rem 2.5rem; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); display: flex; flex-direction: column; gap: 1rem; min-width: 300px;">
    <label for="search" style="font-weight: bold; color: #333;">Zoek een Pokémon:</label>
    <input type="text" name="zoek_term" id="search" placeholder="Bijv. Pikachu" style="padding: 0.5rem; border: 1px solid #ccc; border-radius: 6px;">
    <button
    name="submit" 
    type="submit" style="padding: 0.5rem; background: #ffcb05; color: #2a75bb; border: none; border-radius: 6px; font-weight: bold; cursor: pointer;">Zoek!</button>
  </form>
  <?php if (isset($cards) && count($cards) > 0): ?>
    
        <div class='zoekresultaten'>
            <?php foreach ($cards as $card):  ?>
            <div class="card" style="background: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-top: 1rem;">
                <h3 style="font-size: 1.5rem; color: #333;"><?php echo $card['name']; ?></h3>
                <p style="color: #666;"><?php echo $card['type']; ?></p>
                
                </div>
                <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>

<?php
include 'footer.php';