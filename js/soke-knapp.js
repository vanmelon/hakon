
document.addEventListener("DOMContentLoaded", function() {
    // Hent referanser til søkeknappen og inputfeltet
    var searchButton = document.getElementById("searchButtonID");
    var searchInput = document.getElementById("searchInputID");

    // Legg til en klikk-hendelse for søkeknappen
    searchButton.addEventListener("click", function() {
        // Få verdien fra inputfeltet og konverter til små bokstaver for å unngå case-sensitivitet
        var searchTerm = searchInput.value.toLowerCase();

        // Sjekk hvilken blomst som tilsvarer søket
        switch (searchTerm) {
            case "orkide":
                window.location.href = "#orkide";
                break;
            case "margeritt":
                window.location.href = "#margeritt";
                break;
            case "eukalyptus":
                window.location.href = "#eukalyptus";
                break;

            case "hage tulipan":
                window.location.href = "#hage_tulipan";
                break;
                    case "hage":
                        window.location.href = "#hage_tulipan";
                        break;

            case "lilla tulipan":
                window.location.href = "#lilla_tulipaner";
                break; 
                    case "lilla":
                        window.location.href = "#lilla_tulipaner";
                        break;

            case "orange blomsterbukett":
                window.location.href = "#orange_blomsterbukett";
                break; 
                    case "orange":
                        window.location.href = "#orange_blomsterbukett";
                        break; 

            case "rosa pion":
                window.location.href = "#pion_rosa";
                break;
                case "rosa":
                    window.location.href = "#pion_rosa";
                    break;
                case "rosa pioner":
                    window.location.href = "#pion_rosa";
                    break;

            case "røde tulipan":
                window.location.href = "#red_tulipan";
                break;  
            case "pioner":
                window.location.href = "#pioner";
                break; 
            case "rød blomsterbukett":
                window.location.href = "#rød_blomsterbukett";
                break; 
            case "rosa nelikk":
                window.location.href = "#rosa_nelikk";
                break; 
                    case "nelikk":
                        window.location.href = "#rosa_nelikk";
                        break; 

            case "spraglet tulipan":
                window.location.href = "#tulipan_spraglete_hvit_rosa";
                break; 

            case "vanilje":
                window.location.href = "#vanilje_blomst";
                break;
                    case "vanilje blomst":
                        window.location.href = "#vanilje_blomst";
                        break;
            default:
                alert("Ingen samsvar funnet.");
        }
    });
});
