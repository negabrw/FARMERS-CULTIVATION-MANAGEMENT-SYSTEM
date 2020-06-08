$(document).ready(function ()
{
    $(".parent_menu").change(function ()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "GET",
                    url: "get_district.php",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $(".district").html(html);
                    }
                });
    });
    
    
    $(".district").change(function ()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "GET",
                    url: "get_thana.php",
                    data: dataString,
                    cache: true,
                    success: function (html)
                    {
                        $(".thana").html(html);
                    }
                });
    });


    $(".thana").change(function ()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "GET",
                    url: "get_area.php",
                    data: dataString,
                    cache: true,
                    success: function (html)
                    {
                        $(".area").html(html);
                    }
                });
    });    
    
    
    
    


});


