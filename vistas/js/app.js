Culqi.publicKey = 'pk_test_EwHaxqoljzhmWB7D';


var producto = "";
var monto = 0;


$('#buyButton').on('click', function(e) {

    producto = $("#productos").val();
    monto = $("#monto").val();



    Culqi.settings({
        title: producto,
        currency: 'PEN',
        description: producto,
        amount: monto

    });
    // Abre el formulario con las opciones de Culqi.settings
    Culqi.open();
    e.preventDefault();
});


function culqi() {

    if (Culqi.token) { // ¡Token creado exitosamente!
        // Get the token ID:
        var token = Culqi.token.id;
        console.log("token", token);
        var email = Culqi.token.email;

        var data={
            producto: producto,
            monto: monto,
            token:token,
            email:email,
            
        }

        var url="Ajax/ajax.compras.php";
        $.post(url,data,function(respuesta){
            alert(respuesta);
        });

    } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.mensaje);
    }
};