$(".letras").keypress(function (key) { 
    if ((key.which < 97 || key.which > 122)//letras mayusculas
        && (key.which < 65 || key.which > 90) //letras minusculas 
        && (key.which != 241) //ñ 
         && (key.which != 209) //Ñ
         && (key.which != 8) //retroceso
         && (key.which != 32) //espacio
         && (key.which != 225) //á
         && (key.which != 233) //é
         && (key.which != 237) //í
         && (key.which != 243) //ó
         && (key.which != 250) //ú
         && (key.which != 193) //Á
         && (key.which != 201) //É
         && (key.which != 205) //Í
         && (key.which != 211) //Ó
         && (key.which != 218) //Ú

        )
        return false;
});