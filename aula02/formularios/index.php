<!DOCTYPE html>
<html>
    <head>
        <title>
            Aula de Formulários
        </title>
        <style>
            textarea{
                resize: none;
            }
            
        </style>
    </head>
    <body>
        <form name="frmformulario" method="get" action="index.php">
            Nome: <input type="text" name="txtnome" value="" size="50" maxlength="40">
            <br>
            <br>
            
            Estados:
            <select name="sltestados">
                <option value="" selected>
                    Selecione um item
                </option>
                <option value="sp">
                    São Paulo
                </option>
                <option value="rj">
                    Rio de Janeiro
                </option>
                <option value="mg">
                    Minas Gerais
                </option>
            </select>
            <br>
            <br>
            
            <!-- 
                No elemento radio é obrigatório que todos os elementos tenham o mesmo nome, senão ele permite a seleção múltipla
            -->
            Sexo: 
            <input type="radio" name="rdosexo" value="F" checked>Feminino
            <input type="radio" name="rdosexo" value="M">Masculino
            <br>
            <br>    
            
            Selecione os idiomas:
            <input type="checkbox" name="chkport" value="pt-br" checked>Português
            <input type="checkbox" name="chkeng" value="en">Inglês
            <input type="checkbox" name="chkes" value="es">Espanhol
            <br>
            <br>
            
            Obs: <textarea name="txtobs" cols="30" rows="4"></textarea>
            <br>
            <br>
            
            <input type="submit" name="btnenviar" value="salvar">
            
            <input type="reset" name="btnlimpar" value="Limpar">
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </form>
    </body>
</html>
