<?php
// Starter økten
session_start();

// Ødelegger økten (logger ut brukeren)
session_destroy();

// Omdirigerer tilbake til index-siden
header("Location: index.php");
exit; // Sørg for at skriptet stopper her og ikke fortsetter å kjøre noen kode under omdirigeringen
?>
