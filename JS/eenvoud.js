

window.onload = function(){
    tafelReeks();
    machtReeks();
    breukenReeks();
    kwadraatReeks();
    }
    
    function tafelReeks(){
    /*Variabel voor de uitkomst*/
        var showTables = '';
        
        /*Variabel voor de waarde die je intypet*/
        var values = document.getElementById('waarde1').value;
        /*FOR loop die een rij maakt*/
        for (var i = 0; i < 11; i++) {
        /*Formule van hoe je tafels berekent*/
           showTables += values + " x " + i +" = "+ values*i + "<br>";
           /*Wanneer input = 0, verschijnt er geen resultaat*/
           if (values == 0) {
           document.getElementById("tafels").style.display = none;
           }
           
        }
        /*variabel die de uitkomst pakt en haalt vervolgens wat er berekend wordt in de uitkomst*/
    var p_tables = document.getElementById('tafels').innerHTML = showTables;
    }
    
    
    function machtReeks() {
    var showPower = '';
    var values1 = document.getElementById('macht1').value;
    for (var i = 0; i <16; i++) {
    showPower +=  values1 + " tot de macht " + i + " = " + values1 ** i + "<br>";
}  
    var p_power = document.getElementById('machten').innerHTML = showPower;
    
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
    