function abre(T){
    var ruta = T.src.replace("/s90-Ic42/","/s590-Ic42/"); 
    document.querySelector("#visor img").src = ruta; 
    }
    window.onscroll = function () {
        window.scrollTo(0,0);
   }