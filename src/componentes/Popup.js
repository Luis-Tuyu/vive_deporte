import React, {Component} from 'react';
import Popup from "reactjs-popup";

class popup extends Component{
    state={};   
    render(){
        return(    
            <Popup trigger={<button className=" App bfan2"> Usuario </button>} modal>
    {close => (
      <div >
        <a onClick={close}>
          &times;
        </a>
        <div > Iniciar Sesion </div>
        <div >
          {" "}
          Formulario
        </div>
        <div >
            <button className="bfan" onClick={() => {
              console.log("modal closed ");
              close();
            }}> 
                {this.props.nombre}
            </button>         

            <button className="bfan" onClick={() => {
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