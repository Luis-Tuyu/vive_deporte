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
        var x=document.formu.contraseña.value;
        var y=document.formu.rcontraseña.value;
        if (y!=x) {
            alert('Contraseñas diferentes');
        }else{
            alert('Envio satisfactorio');
            event.preventDefault(); 
        }
        
                                                     
    }  
   
       
   


        
    render(){
        return(
            <form  name="formu" className="formularios" onSubmit={this.handleSubmit} >  
            <h1>REGISTRO</h1>  
                <label>
                    Nombres:  
                    <input name="nombre" placeholder=" *Luis" type="text"  required value={this.state.nombre} onChange={this.handleInputChange} />
                </label>  
                <br/>
                <label>
                    Apellidos:  
                    <input name="apellido"  placeholder="*Chi " type="text"  required value={this.state.apellido} onChange={this.handleInputChange} />
                </label> 
                <br/>
                <label>
                    Email:  
                    <input name="correo"  placeholder=" Example@gmail.com" type="Email"  required value={this.state.correo} onChange={this.handleInputChange} />
                </label> 
                <br/>
                <label>
                    Contraseña: 
                    <input name="contraseña" placeholder=" **********" type="password" minLength="5" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="La contraseña debe tener minimo 5 caracteres, una letra mayuscula y un digito" required value={this.state.contraseña} onChange={this.handleInputChange} />
                </label>  
                <br/>
                <label>
                    Confirmar contraseña: 
                    <input name="rcontraseña" placeholder=" *********" type="password" required value={this.state.rcontraseña} onChange={this.handleInputChange} />
                </label>               
                <br/>
                <input type="submit" className="bfan2" value="Enviar" />  
                      
          </form>       
        );
    }
}
export default formulario; 