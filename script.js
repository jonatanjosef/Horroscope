$(document).ready(function(){

    printHoroscope();    
    
    function printHoroscope(){
        $.ajax({
            method: 'GET',
            url: "./viewHoroscope.php",
        })
        .done(function(data){
            $('#printedHoroscope').html(data);
        })
    }
    
    saveHoroscope = function(){
        var birthDate = $('#birthDate').val();
        if(birthDate !== ""){
            $.ajax({
                method: 'POST',
                url: "./addHoroscope.php",
                data: {birthDate: birthDate}
            })
            .done(function(data){

                printHoroscope();
            })
        }
    }
    
    updateHoroscope = function(){
        var birthDate = $('#birthDate').val();
        if(birthDate !== ""){
            $.ajax({
                method: 'PUT',
                url: "./updateHoroscope.php",
                data: {birthDate: birthDate}
            })
            .done(function(data){

                printHoroscope();
            })
        }
    }
    
    deleteHoroscope = function(){
        var birthDate = $('#birthDate').val();
        $.ajax({
            method: 'DELETE',
            url: "./deleteHoroscope.php",
        })
        .done(function(data){

            printHoroscope();
        })
    }
    
    
    
    });