import React, {Component} from 'react';


class formulario extends Component{
    constructor(props){
        super(props);
        this.state={
            nombre: '',
            apellido: '',
            correo: '',
            contraseña: '',
            rcontraseña:''
        };
        this.handleInputChange = this.handleInputChange.bind(this);
    }
           
    handleInputChange(event) {
        const target = event.target;
        const value = '';
        const name = target.name;

        this.setState({[name]: target.value});
    }
/*
    handleChange(event) {
        this.setState({value: event.target.value});
    }*/

    handleSubmit (event){   
            alert('Envio satisfactorio');
            event.preventDefault();                           
    }  

        
    render(){
        return(
            <form className="formularios" onSubmit={this.handleSubmit} >  
            <h1>REGISTRO</h1>  
                <label>
                    Nombres: 
                    <input name="nombre" type="text"  required value={this.state.nombre} onChange={this.handleInputChange} />
                </label>  
                <br/>
                <label>
                    Apellido: 
                    <input name="apellido" type="text"  required value={this.state.apellido} onChange={this.handleInputChange} />
                </label> 
                <br/>
                <label>
                    Correo:
                    <input name="correo" type="email"  required value={this.state.correo} onChange={this.handleInputChange} />
                </label> 
                <br/>
                <label>
                    Contraseña: 
                    <input name="contraseña" type="password"  required value={this.state.contraseña} onChange={this.handleInputChange} />
                </label>  
                <br/>
                <label>
                    Confirmar contraseña: 
                    <input name="rcontraseña" type="password" required value={this.state.rcontraseña} onChange={this.handleInputChange} />
                </label>               
                <br/>
                <input type="submit" value="Enviar" />  
                      
          </form>       
        );
    }
}
export default formulario; 