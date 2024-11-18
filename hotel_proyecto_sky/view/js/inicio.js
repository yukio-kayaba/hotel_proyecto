const func_ventana = (btn_active_id)=>{
    try {
        let elemento = document.getElementById(btn_active_id);
        
        elemento.addEventListener("click",()=>{
            let back_control = document.getElementsByTagName(btn_active_id);
            // back_control[0].style
        })

    } catch (error) {
        console.warn(`no es una ID :${error}`);
    }
}
func_ventana("btn_hubicacion");