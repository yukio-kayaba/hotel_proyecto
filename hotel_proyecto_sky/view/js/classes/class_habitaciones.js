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
        let url = '';
        if(Array.isArray(this.fotos) && this.fotos.length != 0){
            url = this.fotos[0];
        }else{
            url = "https://images.pexels.com/photos/12296667/pexels-photo-12296667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
        }
        return url;
    }
    set_identificador(){
        return this.identificador;
    }
    set_precio(){
        return this.precio;
    }
}