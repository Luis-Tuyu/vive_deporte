import React, {Component} from 'react';
import Popup from "reactjs-popup";
import Sesion from "../componentes/Sesion";

class popup extends Component{
    state={};   
    render(){
        return(    
            <Popup trigger={<button className="bfan2"> {this.props.name} </button> } modal>
    {close => (
      <div>
        <a className="close" onClick={close}>
          &times;
        </a>
        <div > Iniciar Sesion </div>
        <div >
          {" "}
          <Sesion/>
        </div>        
      </div>
    )}
  </Popup>            
                  
        )
    }
}
export default popup; 