$(function(){
    $('#btn-ekle').click(function(){

        var mustc= $("#mustc").val();
        var musAdi=$("#musAdi").val();
        var musSoyadi=$("#musSoyadi").val();
        var musTel= $("#musTel").val();
        var musAdres=$("#musAdres").val();
       // var mustc= $("#mustc").val().trim().value();
        if(musAdi!=""&&mustc!=""&&musSoyadi!=""&&musTel!=""&&musAdres!=""){

           $("#icerik").fadeIn().hide();
        }
        else
        {


        }

    });

});