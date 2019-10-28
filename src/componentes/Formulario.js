import React, {Component} from 'react';

class formulario extends Component{
    state={};

    render(){
        return(
            <form className="formularios" >  
            <h1>REGISTRO</h1>  
                <label for="txt">Nombres  </label>
                <input type="text" id="nombre" placeholder="Nombres" value="" required/>
                <label for="txt">Apellidos  </label>
                <input type="text" id="apellido" placeholder="Apellidos" value="" required/>

                <br/>
                <br/>

                <label for="correo">Email  </label>
                <input type="correo" id="email" placeholder="Email" value="" required/>

                <br/>
                <br/>

                <label for="number">Edad  </label>
                <input type="number" id="edad" placeholder="Edad" value="15" min="2" max="50" required/>

                <label for="txt">Genero  </label>
                <input type="radio" id="hombre" name="radio"/> <label for="blanco">Hombre</label>
                <input type="radio" id="mujer" name="radio"/> <label for="negro">Mujer</label>

                <br/>

                <label for="pass">Contraseña  </label>
                <input id="pass" type="password" placeholder="Password" value="" required/>

                <br/> 

                <br/>                
          </form>       
        );
    }
}
export default formulario; 