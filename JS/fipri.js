

window.onload = function(){
    Fibonacci_genereren();
    }
    
    function Fibonacci_genereren() {
        var begin_Fibonacci = [0,1];
        
        var element_fibonacci = document.getElementById("element_fib").value;
       
        for(var element=begin_Fibonacci.length; element<=element_fibonacci; element++) {
            begin_Fibonacci[element] = begin_Fibonacci[element-2] + begin_Fibonacci[element-1];
        }
        document.getElementById('fibonacci-output').innerHTML = begin_Fibonacci;
        	
        }
    
    

    