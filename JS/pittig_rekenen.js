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



angular.module('ng').directive('selectText', function () {
    return function (scope, element, attrs) {
        element.focus(function () {
            element.select();
        });
    };
});

function ConvertController($scope) {
    $scope.input = 0;
    $scope.bases = [{
        label: 'Binary',
        value: 2
    }, {
        label: 'Octal',
        value: 8
    }, {
        label: 'Hexadecimal',
        value: 16
    }];
    $scope.base = $scope.bases[0];
    $scope.result = '0';

    // converts 10 to 15 to A to E
    function _getHexa(n) {
        if (n >= 10 && n < 16) {
            return String.fromCharCode(n + 55);
        }

        return n;
    }

    $scope.convert = function () {
        var base = $scope.base.value;
        var n = parseInt($scope.input);
        var quo;
        var mod;
        var result = '';

        // clean non integer input
        $scope.input = n;

        while (n > 0) {
            // Get modulus
            mod = n % base;

            // Get the quotinent            
            quo = (n - mod) / base;
            // quo = Math.floor(n / base);            

            if (base == 16) {
                result = _getHexa(mod) + result;
            } else {
                result = mod + result;
            }

            n = quo;
        }

        $scope.result = result;
    }
}