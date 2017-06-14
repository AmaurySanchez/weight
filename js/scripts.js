$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});


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

$(function(){
    $("#register-submit").click(function(){
        var url= "Controlador.php";

            $.ajax({
                type:"POST",
                url:url,
                data: $("#register-form").serialize(),
                success: function(data){
                    $("#resultadoRegistro").html(data);
                    setTimeout('document.location.reload()',2000);
                }
            });
        return false;
    });

});

$(function(){
    $("#login-submit").click(function(){
        var url= "Controlador.php";

            $.ajax({
                type:"POST",
                url:url,
                data: $("#login-form").serialize(),
                success: function(data){
                     //$("#resultadoLogin").html(data);
                     if(data){
                            setTimeout('window.location.href="comidas.php"',2000);
                     }
                     
                }
            });
        return false;
    });

});

$(function(){
    $("#enviarComidas").click(function(){
        var url= "Controlador.php";

            $.ajax({
                type:"POST",
                url:url,
                data: $("#comidasForm").serialize(),
                success: function(data){
                    alert(data);
                }
            });
        return false;
    });

});


