import React, {Component} from 'react';

class formulario extends Component{
    constructor(props){
        super(props);
        this.state={value: ' '};
        this.state.nombre={value: ' '};
        this.state.apellido={value: ' '};
        this.state.correo={value: ' '};
        this.state.contraseña={value: ' '};        

        this.handleChange= this.handleChange.bind(this);
        this.handleSubmit= this.handleSubmit.bind(this);
    }
    handleChange(event){
        this.setState({value: event.target.value});
    }
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
                    <input type="text" placeholder=" Entrada de texto" required value={this.state.value.nombre} onChange={this.handleChange.nombre}/>
                </label>  
                <br/>
                <label>
                    Apellido: 
                    <input type="text" placeholder=" Entrada de texto" required value={this.state.value.apellido} onChange={this.handleChange.apellido}/>
                </label> 
                <br/>
                <label>
                    Correo:
                    <input type="email" placeholder=" Entrada de texto" required value={this.state.value.correo} onChange={this.handleChange.correo}/>
                </label> 
                <br/>
                <label>
                    Contraseña: 
                    <input type="password" placeholder=" Entrada de texto" required value={this.state.value.contraseña} onChange={this.handleChange.contraseña}/>
                </label>                
                <br/>
                <input type="submit" value="Enviar"/>            
          </form>       
        );
    }
}
export default formulario; 