import React, {Component} from 'react'; 
import {Link} from 'react-router-dom';
import logo from '../IMG/logo.png';

class cabeza extends Component{
    state={};

    render(){
        return(
            <div className="arriba">                
                <header>  
                    < Link to="/"> 
                    <img src={logo} width={150} height={150}/> 
                    </Link>                                                        
                </header>                                
            </div>
            
        )
    }
}
export default cabeza; 