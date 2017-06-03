$(function(){
    $("#enviar").click(function(){
        var url= "Controlador.php";
        
            $.ajax({
                type:"POST",
                url:url,
                data: $("#formulario").serialize(),
                success: function(data){
                    $("#resultado").html(data);
                }
            });
        return false;
    });

});