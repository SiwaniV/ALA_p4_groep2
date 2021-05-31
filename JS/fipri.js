

window.onload = function(){
  
    }
    
    function Fibonacci_genereren() {
        var begin_Fibonacci = [0,1];
        
        var element_fibonacci = document.getElementById("input_fib").value;
       
        for(var getal=begin_Fibonacci.length; getal<=element_fibonacci; getal++) {
            begin_Fibonacci[getal] = begin_Fibonacci[getal-2] + begin_Fibonacci[getal-1];
        }
        document.getElementById('fibonacci-output').innerHTML = begin_Fibonacci;
        	
        }
    
    

    