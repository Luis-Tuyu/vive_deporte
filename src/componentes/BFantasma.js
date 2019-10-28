import React, {Component} from 'react';
import {Link} from 'react-router-dom';

class bfantasma extends Component{
    state={};   
    render(){
        return(    
            <div className="classbotones"> 
                <Link to={this.props.link} className="bfan"> {this.props.nombre} </Link>                
            </div>
                  
        )
    }
}
export default bfantasma; 