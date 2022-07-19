/*=========================================================================================
    File Name: gauge.js
    Description: Chartist gauge chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: Islam3bdu
    Author URL: http://www.themeforest.net/user/Islam3bdu
==========================================================================================*/

// Gauge chart
// ------------------------------
$(window).on("load", function(){

    new Chartist.Pie('#gauge-chart', {
        series: [20, 10, 30, 40]
    }, {
        donut: true,
        donutWidth: 60,
        startAngle: 270,
        total: 200,
        showLabel: false
    });
});