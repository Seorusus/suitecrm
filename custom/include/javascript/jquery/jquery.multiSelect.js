var counterDebug = 0;
jQuery.fn.multiSelect = function() {

    function selectHide(node) {
        var id = $(node).attr('id');
        $(node).each(function(){
            var count = 0;
            var currentValue = '';

            for(var i=0; i < this.length; i++) {
                if(this[i].selected) {
                    count++;
                    currentValue = this[i].label;
                }
            }

            if(count == 1) {
                // Если выбран один объект
                $('#'+$(this).attr('id')+'_hide').html("<option>"+currentValue+"</option>");
            } else {
                // Если выбранных объектов или нет или их много
                $('#'+$(this).attr('id')+'_hide').html("<option>Выбрано: "+count+"</option>");
            }

        });
        $(node).css('position', 'absolute');
        //$(node).attr('size', 20);
        $(node).hide();
    }

    function selectShow(id) {
        $('#'+id+'_hide').hide();
        $('#'+id).show();
        setTimeout(function(){
                    $('#'+id).focus();
                }, 1);
    }


    // Убрали фокус с полной версии
    $(this).focusout(function(e){
        selectHide($('#'+this.id));
        $('#'+this.id+'_hide').show();
    });

    // Двойной клик по пункту меню
    $(this).dblclick(function(e){
        selectHide($('#'+this.id));
        $('#'+this.id+'_hide').show();
    });


    this.attr("customHide", true);

    // Нажатие на скрытую краткую версию

    var selectID = $(this).attr('id');
    var hideID = $(this).attr('id')+'_hide';

    $('#'+hideID).mousedown('click', function(){
        selectShow(selectID);
    });

    selectHide(this);

}