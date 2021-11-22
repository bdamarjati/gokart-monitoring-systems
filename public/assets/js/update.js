setInterval(updateView, 5000);

function updateView() {
    var disVal = document.getElementById('swDis').getAttribute('value');
    var goVal = document.getElementById('swGo').getAttribute('value');
    if (disVal == 1) {
        document.getElementById('swDis').checked = true;
    }
    if (goVal == 1) {
        document.getElementById('swGo').checked = true;
    }
    if (disVal == 0) {
        document.getElementById('swDis').checked = false;
    }
    if (goVal == 0) {
        document.getElementById('swGo').checked = false;
    }
    $.ajax({
        url: 'api/getGokartData',
        success: function (data) {
            //
            document.getElementById('rpm').innerHTML = data[0].rpm;
            document.getElementById('gVolt').innerHTML = data[0].voltage;
        }
    });
    $.ajax({
        url: 'api/ChargeData',
        success: function (data) {
            //
            document.getElementById('soc').innerHTML = data.soc;
            document.getElementById('solar').innerHTML = data.data[0].solar;
        }
    });
    $.ajax({
        url: 'api/countLap',
        success: function (data) {
            //
            document.getElementById('lap').innerHTML = data;
        }
    });
};
