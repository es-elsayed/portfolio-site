/*=========================================================================================
    File Name: custom-labels.js
    Description: Chartist custom labels pie chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: Islam3bdu
    Author URL: http://www.themeforest.net/user/Islam3bdu
==========================================================================================*/

// Custom labels pie chart
// ------------------------------
$(window).on("load", function(){

    var data = {
        labels: ['Bananas', 'Apples', 'Grapes'],
        series: [20, 15, 40]
    };

    var options = {
        labelInterpolationFnc: function(value) {
            return value[0]
        }
    };

    var responsiveOptions = [
        ['screen and (min-width: 640px)', {
            chartPadding: 30,
            labelOffset: 100,
            labelDirection: 'explode',
            labelInterpolationFnc: function(value) {
                return value;
            }
        }],
        ['screen and (min-width: 1024px)', {
            labelOffset: 80,
            chartPadding: 20
        }]
    ];

    new Chartist.Pie('#pie-custom-labels', data, options, responsiveOptions);

});