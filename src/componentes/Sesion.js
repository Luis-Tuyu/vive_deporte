import React, {Component} from 'react';


class sesion extends Component{
    constructor(props){
        super(props);
        this.state={value: ' '};        
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
            <form classNameP="formulario">      
                <label>
                    Correo:
                    <input type="email" placeholder=" Entrada de texto" required value={this.state.value.correo} onChange={this.handleChange.correo}/>
                </label> 
                <br/>
                <label>
                    Contraseña: 
                    <input type="password" placeholder=" Entrada de texto" required value={this.state.value.contraseña} onChange={this.handleChange.contraseña}/>
                </label>  
                <input className="bfan2" type="submit" value="Enviar"/> 

            </form>
                  
        )
    }
}
export default sesion; 