   function generateLine(divName, className) {
        var result = '<div id="' + divName + '" class="' + className + '">';
		for (var j = 0; j < 512; j++) {
		  result += Math.round(Math.random());
		}    
        result += '</div>';
        return result;
    }

    function populateNumbers(divName, zeilenzahl) {
        if (divName == null) {          divName = 'numbers';        }

        if (zeilenzahl == null) {          zeilenzahl = 10;        }


        var numberDivs = '';
        for (var i = 0; i < zeilenzahl; i++) {
	  		numberDivs += generateLine(divName + i, 'numbers');
        }
        $('#' + divName).append(numberDivs);
    }

    function changeNumbers() {
        var numberDivs = $('#numbers .numbers');
        var divName = '#numbers' + Math.round(Math.random() * numberDivs.size()).toString();
        $(divName).html(generateLine(divName, 'numbers'));
        setTimeout(changeNumbers, Math.round(5000 * Math.random()));
    }