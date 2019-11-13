function validarEntrada(caracter, campo)
{
    
    // .charCode ou which converte o caractér digitado em ascii
    
    // Serve para padronizar a conversão em ascii em todas as versões de navegadores.
    
    // Os que são baseados em janelas ou não.
    if (window.event)
        var asc = caracter.charCode;
    else
        var asc = caracter.which;
    
    if (campo == "number") 
    {
        if(asc >= 48 && asc <= 57)
            return false;
    } else if(campo == "text") 
    {
        if(asc < 48 || asc > 57) 
            return false; // Cancela o evento da tecla digitada.
    } 
    
}

function mascaraFone (obj, caracter)
{
    
    if (validarEntrada(caracter, "text") == false)
        return false;
    else {
  
        var input = obj.value;
        var id = obj.id;
        var resultado = input;

        if (input.length == 0)
            resultado = "(";
        else if (input.length == 4)
            resultado += ") ";
        else if (input.length == 10)
            resultado += "-";
        else if (input.length == 15)
            return false;

        document.getElementById(id).value = resultado;
    
    }
    
}