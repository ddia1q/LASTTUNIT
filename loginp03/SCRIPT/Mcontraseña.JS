document.getElementById('Mcontraseña').addEventListener('click', function() {
    //funcion que nos ayudara a mostrar u ocultar la contraseña.

    var pww = document.getElementById('password');
   //variable password, debe de estar en el formulario tambien, referenciada gracias a su ID. 

    if (pww.type === 'password') {
       //bloque IF que iniciara si el campo de entrada es password se

        pww.type = 'text';
        //si el tipo de entrada se reconoce como texto entonces 
        //el boton cambiara a "ocultar"
        this.textContent = 'Ocultar';
       
        
    } else {
        pww.type = 'password';
       //si el tipo de entrada es de contrasela entonces 
       //el boton dira "Mostrar contraseña"
        this.textContent = 'Mostrar Contraseña';
      
    }
});
