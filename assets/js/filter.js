(function (window, document, $) {
    'use strict';
    $('#province').on('change', function () {
        var id = $(this).val();
        if (id) {
            $.ajax({
                type: 'POST',
                url: 'welcome/district',
                data: {'province': id},
                success: function (data) {
                    $('#district').html('<option value="">...Seçiniz...</option>');
                    var dataObj=$.parseJSON(data);
                    if(dataObj){
                        $(dataObj).each(function (){
                            var option=$('<option />');
                            option.attr('value',this.id).text(this.districtName);
                            $('#district').append(option);
                        });
                    }
                    else{
                        $('#district').html('<option value="">Sonuç Yok</option>');
                    }
                }
            })
        }else{
            $('#district').html('<option value="">...Seçiniz...</option>');
        }
    });
    $('#district').on('change', function () {
        var id = $(this).val();
        if (id) {
            $.ajax({
                type: 'POST',
                url: 'welcome/neigh',
                data: {'district': id},
                success: function (data) {
                    $('#neighborhood').html('<option value="">...Seçiniz...</option>');
                    var dataObj=$.parseJSON(data);
                    if(dataObj){
                        $(dataObj).each(function (){
                            var option=$('<option />');
                            option.attr('value',this.id).text(this.neighborhoodName);
                            $('#neighborhood').append(option);
                        });
                    }
                    else{
                        $('#neighborhood').html('<option value="">Sonuç Yok</option>');
                    }
                }
            })
        }
    });
    $('#neighborhood').on('change', function () {
        var id = $(this).val();
        if (id) {
            $.ajax({
                type: 'POST',
                url: 'welcome/mah',
                data: {'neighborhood': id},
                success: function (data) {
                    $('#mahalle').html('<option value="">...Seçiniz...</option>');
                    var dataObj=$.parseJSON(data);
                    if(dataObj){
                        $(dataObj).each(function (){
                            var option=$('<option />');
                            option.attr('value',this.id).text(this.mahalleName);
                            $('#mahalle').append(option);
                        });
                    }
                    else{
                        $('#mahalle').html('<option value="">Sonuç Yok</option>');
                    }
                }
            })
        }
    });
})(window, document, jQuery);