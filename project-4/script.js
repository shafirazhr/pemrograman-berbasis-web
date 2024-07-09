/*<script src="script.js"></script>*/
$(document).ready(function() {
    $('#calculateBtn').click(function() {
        var numbersInput = $('#numbersInput').val();
        var numbers = numbersInput.split(',').map(function(num) {
            return parseInt(num);
        });

        var min = Math.min.apply(null, numbers);
        var max = Math.max.apply(null, numbers);
        var sum = numbers.reduce(function(a, b) {
            return a + b;
        });
        var mean = sum / numbers.length;

        var mode = {};
        var modeNumber = null;
        var modeCount = 0;
        for (var i = 0; i < numbers.length; i++) {
            if (mode[numbers[i]] === undefined) {
                mode[numbers[i]] = 1;
            } else {
                mode[numbers[i]]++;
            }

            if (mode[numbers[i]] > modeCount) {
                modeCount = mode[numbers[i]];
                modeNumber = numbers[i];
            }
        }

        $('#resultContainer').html('<p>Min: ' + min + '</p>' +
            '<p>Max: ' + max + '</p>' +
            '<p>Mean: ' + mean + '</p>' +
            '<p>Modus: ' + modeNumber + ' (ada ' + modeCount + ' angka)</p>');
    });
});
