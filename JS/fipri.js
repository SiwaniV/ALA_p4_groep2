

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

        (function() {

            var isPrimeNumber = function( number ) {
                if ( number == 1 || number == 2 ) {
                    return true;
                }
                for ( var i = 2; i < number; i++ ) {
            
                    if ( number % i == 0 ) {
                        return false;
                    }
                } 
                return true;
            };
            
            var unique = function( arr ) {
                return arr.reduce(function( p, c ) {
                    if ( p.indexOf( c ) < 0 ) {
                        p.push( c );	
                    }
                    return p; 
                }, []);
            };
        
            var nextPrime = function( number ) {
                var n;
                if( number % 2 == 0 ) {
                    number++;
                }
                
                for( n = number; !isPrimeNumber( n ); n += 2 ) {
                    
                }
                return n;
            };
            
            document.addEventListener( "DOMContentLoaded", function() {
                var form = document.querySelector( "#prime" ),
                    output = document.querySelector( "#output" );
                    
                form.addEventListener( "submit", function( e ) {
                    e.preventDefault();
                    var n = document.querySelector( "#number" ).value;
                    var text = [];
                    for( var i = 0; i < n; ++i ) {
                        text.push( nextPrime( i ) );	
                    }
                    output.innerHTML = unique( text ).join( " " );
                }, false);
                
            });
            
            
        })();
    
    

    