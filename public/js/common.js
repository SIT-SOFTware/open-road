// Formats Phone Numbers
function formatPhoneNumberOnKey(event, fieldID) {
    // on keyup, check for backspace to skip processing
    var code = (event.which) ? event.which : event.keyCode;
    if (code!=8) {
        formatPhoneNumber(fieldID);
    } else {
        //trim whitespace from the end; trimEnd() doesn't work in IE
        document.getElementById(fieldID).value = document.getElementById(fieldID).value.replace(/\s+$/, '');
    }
}

function formatPhoneNumber(fieldID) {
    var phoneField = document.getElementById(fieldID);
    // remove all non-numeric characters
    var realNumber = phoneField.value.replace(/\D/g, '');
    var newNumber = "";
    for (var i = 1; i <= realNumber.length; i++) {
        // make sure input is a digit
        if (isNumeric(realNumber.charAt(i-1))) {
            newNumber += realNumber.charAt(i-1);
        }
        // add hyphen every 3 numeric digits
        if (i % 3 == 0 && i > 0 && i < 9) {
            newNumber += "-";
        }
    }
    phoneField.value = newNumber;
}

function isNumeric(char) {
    return('0123456789'.indexOf(char) !== -1);
}

// Change the province/state list according to selected country
function countrySelect(selectObject){
    var country = selectObject;

    if (country == "ca") {
        clearList();
        canada();
    }
    if (country == "us") {
        clearList();
        usa();
    }
    if (country == "null") {
        clearList();
    }
}

// Populate the province list when country is changed to Canada
function canada() {
    var prov = ['AB', 'BC', 'MB','NB', 'NL', 'NS', 'NT', 'NU', 'ON', 'PE', 'QC', 'SK', 'YT'];
    var list = "";

    for (var i = 0; i < prov.length; i++) {
        var pr = "<option value=" + prov[i] + ">\n";

        list = list + pr;
    }

    document.getElementById('provList').innerHTML = list;
}

// Populate the state list when country is changed to United States
function usa() {
    var state = ['AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY'];
    var list = "";

    for (var i = 0; i < state.length; i++) {
        var pr = "<option value=" + state[i] + ">\n";

        list = list + pr;
    }

    document.getElementById('provList').innerHTML = list;
}

// Clear the list
function clearList() {
    document.getElementById('provList').innerHTML = "";
}