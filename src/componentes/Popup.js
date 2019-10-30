import React, {Component} from 'react';
import Popup from "reactjs-popup";
import Sesion from "../componentes/Sesion";

class popup extends Component{
    state={};   
    render(){
        return(    
            <Popup trigger={<button className=" App bfan2"> Usuario </button>} modal>
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
        <div >
            <button className="bfan2" onClick={() => {
              console.log("modal closed ");
              close();
            }}> 
                {this.props.nombre}
            </button>         

            <button className="bfan2" onClick={() => {
              console.log("modal closed ");
              close();
            }}>
                {this.props.nombre2}    
            </button>
        </div>
      </div>
    )}
  </Popup>            
                  
        )
    }
}
export default popup; 