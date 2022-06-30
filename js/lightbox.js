const imagenes = document.querySelectorAll('.img-galeria')
const imagenesLight = document.querySelectorAll('.agregar-imagen')
const contenedorLight = document.querySelectorAll('.imgen-light')


imagenes.forEach(imagen =>{
    imagen.addEventListener('click' , ()=>{
        aparecerImagen(imagen.getAttribute('src'))

    })
})


contenedorLight.addEventListener('click' , (e)=> {
    if(e.target!== imagenesLight){
        contenedorLight.classList.toggle('show')
        imagenesLight.classList.toggle('showImg')

    }

})


const aparecerImagen = (imagen) =>{
    imagenesLight.src = imagen
    contenedorLight.classList.toggle('show')
    imagenesLight.classList.toggle('showImg')

}