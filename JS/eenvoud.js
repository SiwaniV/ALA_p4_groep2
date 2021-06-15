

window.onload = function(){

  
  
    }
    


    function genereerTafel() {
        var vermenigvuldigtal = document.getElementById("tafel-vermenigvuldigtal").value; // De invoer van de gebruiker
        var maxVermenigvuldiger = document.getElementById("tafel-max-vermenigvuldiger").value;
        var antwoordVeld = document.getElementById("tafel");
    
        antwoordVeld.value = ""; // We beginnen elke reeks met een leeg antwoord veld
    
        for(var vermenigvuldiger = 1; vermenigvuldiger <= maxVermenigvuldiger; vermenigvuldiger++) {
            var product = vermenigvuldiger * vermenigvuldigtal;  // We rekenen het product uit van 1 vermenigvuldiging
            var vermenigvuldiging = vermenigvuldiger + " x " + vermenigvuldigtal + " = " + product; // Dit is de tekstuele berekening die we kunnen toevoegen aan het antwoordveld.
            antwoordVeld.value += vermenigvuldiging + "\n"; // We de berekening toe aan het antwoord veld afgesloten met een nieuwe regel \n
        }
    

    }
    
    
    function machtReeks() {
    var uitkomst_macht = '';
    var grondgetal = document.getElementById('macht1').value;
    for (var exponent = 0; exponent<=15; exponent++) {
        var product_2 = grondgetal ** exponent;
        uitkomst_macht +=  grondgetal + " tot de macht " + exponent + " = " + product_2 + "<br>";
}  
    document.getElementById('machten').innerHTML = uitkomst_macht;
    
    }
    
    
    function breukenReeks(){
    var uitkomst_breuk = '';
    var noemer = document.getElementById('breuk1').value;
    for (var teller = 1; teller <= noemer; teller++) {
      var  quotiënt = noemer / teller;
        uitkomst_breuk += " 1 " + "/ " + teller  + " = " + quotiënt  + "<br>";
    }
    document.getElementById('breuken').innerHTML = uitkomst_breuk;
    
    }
    
    function kwadraatReeks(){
    var uitkomst_kwadraat = '';
    var grondgetal_max = document.getElementById('kwad1').value;
    for (var start_grondgetal = 1; start_grondgetal <= grondgetal_max; start_grondgetal++) {
        var product_kwadraat = start_grondgetal ** 2;
        uitkomst_kwadraat += start_grondgetal + " " + "<sup>2</sup>" + " = " + product_kwadraat + "<br>";
    } 
    document.getElementById('kwadraat').innerHTML = uitkomst_kwadraat;
    
    }

    