(function() {
    'use strict';

    var CAP = 1000000000000;

    var output = document.getElementById('priemgetallen'),
        input = document.getElementById('nummer'),
        findBtn = document.getElementById('priem-button');


    function getAllFactorsFor(remainder) {
        var factors = [],
            i;

        for (i = 2; i <= remainder; i++) {
            while ((remainder % i) === 0) {
                factors.push(i);
                remainder /= i;
            }
        }

        return factors;
    }

    findBtn.onclick = function(event) {
        var val = +(input.value),
            result;

        if (isNaN(val) || val > CAP) {
            return;
        }

        output.innerHTML = getAllFactorsFor(val).join(', ');
    };

})();