# Eksamen 2024
Eksamen 2024 i driftstøtte, brukerstøtte og utvikling.

### Om prosjektet
<b>IP: http://kakon</b>

Programmet er 

Når det kommer til frontend, bruker programmet HTML og CSS. I backend bruker programmet JavaScript og PHP. På Proxmox (som kjører lokalt på skolen) har jeg satt opp en container. I den containeren er det en Apache2 og MySQL server som snakker med hverandre via PHP.

### Filene
``index.html`` → "DirectoryIndex" side, altså startside for programmet. 

``style.css`` → Universell CSS/styling for de to HTML sidene.

``log_inn_side.php`` → PHP script som lager en tilkobling med MySQL databasen.

``regritrering.php`` → 

``etter_regristrering.php`` → 

``main.js`` → JavaScript koblet til ``index.html``. Scriptet kjører både ``getData.php`` og ``deleteData.php``.

### Spesifikasjoner
Hvilke spesifikasjoner du burde ha på serveren/containeren din for å kjøre programmet.

* Først er det anbefalt at du setter opp et VM eller en container.
* Serveren trenger Apache2 installert.
* Serveren trenger MariaDB eller MySQL installert.
* Det er anbefalt å laste ned git, og å koble seg til GitHub.
* Husk å endre permissions og starting directory.
  * Du kan endre DocumentRoot i /etc/apache2/sites-available/000-default.conf for å endre startside.
* Sett opp en database og et table på SQL-serveren.
* Endre PHP-filene med brukernavn, passord, serveradresse, databasenavn og tablenavn etter det som stemmer med det du har satt opp.

![Server spesifikasjoner](eksamenSpecs.png)
<br><br>
## Brukerstøtte
1. Hva er det første du ser når siden laster inn?
<br><br>
6. Hvordan var programmet å bruke?
7. Støtte du på noen problemer?
8. Er det noe som kan forbedres? Hva?

## Kilder

Generelt om HTML, PHP, CSS og SQL - https://www.w3schools.com/

GitHub i Ubuntu - https://www.howtoforge.com/tutorial/install-git-and-github-on-ubuntu/

Hjelp med error fiksing - https://chat.openai.com/

Hvordan sette opp Linux, Apache, MySQL og PHP på Ubuntu - https://www.digitalocean.com/community/tutorials/how-to-install-lamp-stack-on-ubuntu

Testing mot SQL injection - https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/07-Input_Validation_Testing/05-Testing_for_SQL_Injection
