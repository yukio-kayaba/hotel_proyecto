class habitaciones{

    constructor(identificador,nombre,descripcion,precio,fotos){
        this.identificador = identificador;
        this.nombre = nombre;
        this.descripcion = descripcion;
        this.fotos = fotos;
        this.precio = precio;
    };

    set_nombre() {
        return this.nombre;
    }

    set_descripcion(){
        return this.descripcion;
    }
    set_fotos(){
        return this.fotos;
    }
    set_foto_principal(){
        return this.fotos[0];
    }
    set_identificador(){
        return this.identificador;
    }
    set_precio(){
        return this.precio;
    }
}