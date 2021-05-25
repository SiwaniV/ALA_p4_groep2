

window.onload = function(){
    tafelReeks();
    machtReeks();
    breukenReeks();
    kwadraatReeks();
    resetInput();
    }
    
    function tafelReeks(){
        /*Variabel voor de uitkomst*/
        var uitkomst = '';
        
        /*Variabel voor de waarde die je intypet*/
        var vermenigvuldigtal = document.getElementById('waarde1').value;
        if (vermenigvuldigtal == 0) {
            document.getElementById("tafels").style.display = none;
        }

        /*FOR loop die een rij maakt*/
        for (var vermenigvuldiger = 1; vermenigvuldiger <= 10; vermenigvuldiger++) {
            var product = vermenigvuldiger * vermenigvuldigtal;
            /*Formule van hoe je tafels berekent*/
            uitkomst += vermenigvuldiger + " x " + vermenigvuldigtal +" = " + product +  "<br>";
           /*Wanneer input = 0, verschijnt er geen resultaat*/
           
        }
        /*variabel die de uitkomst pakt en haalt vervolgens wat er berekend wordt in de uitkomst*/
        document.getElementById('tafels').innerHTML = uitkomst;
    }
    
    
    function machtReeks() {
    var uitkomst2 = '';
    var grondgetal = document.getElementById('macht1').value;
    for (var exponent = 0; exponent<=15; exponent++) {
        var product_2 = grondgetal ** exponent;
    uitkomst2 +=  grondgetal + " tot de macht " + exponent + " = " + product_2 + "<br>";
}  
    document.getElementById('machten').innerHTML = uitkomst2;
    
    }
    
    
    function breukenReeks(){
    var showFracture = '';
    var values2 = document.getElementById('breuk1').value;
    for (var i = 1; i <= values2; i++) {
    showFracture += " 1 " + "/ " + i  + " = " + 1 / i  + "<br>";
    }
    var p_fracture = document.getElementById('breuken').innerHTML = showFracture;
    
    }
    
    function kwadraatReeks(){
    var showSquare = '';
    var values3 = document.getElementById('kwad1').value;
    for (var i = 1; i <= values3; i++) {
    showSquare += i + " " + "kwadraat" + " = " + i ** 2 + "<br>";
    } 
    var p_square = document.getElementById('kwadraat').innerHTML = showSquare;
    
    }

    