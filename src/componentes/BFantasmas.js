import React, {Component} from 'react';
import {Link} from 'react-router-dom';

class bfotones extends Component{
    state={};   
    render(){
        return(    
            <div className="classbotones"> 
                <Link to="/Servicios" className="bfan"> {this.props.nombre} </Link> 
                <Link to="/Ayuda" className="bfan secundario"> {this.props.nombre2} </Link>                        
                <Link to="/Registro" className="bfan tercero"> {this.props.nombre3} </Link> 
            </div>
                  
        )
    }
}
export default bfotones; 