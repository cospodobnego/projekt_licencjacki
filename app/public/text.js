$(document).ready(function() {
    var resize = ['.article', '.about', '.sources', '.articletwo', '.articlethree','.textelem'];
    resize = resize.join(',');

    //resets the font size when "reset" is clicked
    var resetFont = $(resize).css('font-size');
    $(".reset").click(function() {
        $(resize).css('font-size', resetFont);
    });

    //increases font size when "+" is clicked
    $(".increase").click(function() {
        var originalFontSize = $(resize).css('font-size');
        const originalFontNumber = parseFloat(originalFontSize, 10);
        if(originalFontNumber<=28){
        var newFontSize = originalFontNumber * 1.2;
        $(resize).css('font-size', newFontSize);
        }
        return false;
    });

    //decrease font size when "-" is clicked

    $(".decrease").click(function() {
        var originalFontSize = $(resize).css('font-size');
        const originalFontNumber = parseFloat(originalFontSize, 10);
        console.log(originalFontNumber);
        if(originalFontNumber>=13) {
            var newFontSize = originalFontNumber * 0.8;
            $(resize).css('font-size', newFontSize);
        }
        return false;
    });

});

