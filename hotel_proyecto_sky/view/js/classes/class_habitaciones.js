class habitaciones{

    constructor(identificador,nombre,descripcion,fotos){
        this.identificador = identificador;
        this.nombre = nombre;
        this.descripcion = descripcion;
        this.fotos = fotos;
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
    set_identificador(){
        return this.identificador;
    }
}