<?php
// Funktion, um die IP-Adresse des Servers zu erhalten
function getServerIP() {
    // $_SERVER['SERVER_ADDR'] gibt die IP-Adresse des Servers zurück
    return $_SERVER['SERVER_ADDR'];
}

// IP-Adresse abrufen
$serverIP = getServerIP();
?>

<!-- JavaScript, um die IP-Adresse anzuzeigen -->
<script>
    document.getElementById("ipAddress").innerHTML = "Server IP Address: <?php echo $serverIP; ?>";
</script>
