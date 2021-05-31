

window.onload = function(){
  
    }
    
    function Fibonacci_genereren() {
        var fibonacci_begin = [0,1];
        //var num = prompt("Enter the limit to generate fibonacci no",10);
        var input_getal = document.getElementById("input_fib").value;
        //console.log(x);
        for(var getal=fibonacci_begin.length; getal<=input_getal; getal++) {
            fibonacci_begin[getal] = fibonacci_begin[getal-2] + fibonacci_begin[getal-1];
        }
        document.getElementById('fibonacci-output').innerHTML = fibonacci_begin;
        
        }
    
    

    