$(document).ready(function () {
    /* Cerrar alert automaticamente */
	$(".alert-dismissible").fadeTo(3000, 1000).slideUp(1000, function(){
		$(".alert-dismissible").alert('close');
	});
    /* Eliminar Button */
    $(".eliminar").click(function () {
        if (confirm('¿Estás seguro de eliminar este registro?')) {
            return true;
        } else {
            return false;
        }
    });

    $(".js-buscador").select2();
});