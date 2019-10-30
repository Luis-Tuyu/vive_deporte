import React from 'react';
import '../App.css';
import Cabeza from '../componentes/Cabeza';
import Pie from '../componentes/Pie';
import BFantasmas from "../componentes/BFantasmas";
import redes from "../IMG/redes.png";

const ayuda = () => {

    return(
        <div className="App">
            <Cabeza />
            <BFantasmas nombre="Servicios" nombre2="Ayuda" nombre3="Registro"/>  
            <body id="eventos">
                <div className="Cuadros">
                    
                    <div className="f tar_ancho">
                        <div className="tar_largo">
                            <div className="tar_imagen">
                                                           
                            </div>
                        </div>
                    </div>             
                    <div className="f tar_ancho">
                        <div className="tar_largo">
                            <div className="tar_imagen">                                                           
                            </div>
                        </div>
                    </div>  
                    <div className="f tar_ancho">
                        <div className="tar_largo">
                            <div className="tar_imagen">
                                                           
                            </div>
                        </div>
                    </div> 
                    <div className="f tar_ancho">
                        <div className="tar_largo">
                            <div className="tar_imagen">
                                                           
                            </div>
                        </div>
                    </div> 
                    <div className="f tar_ancho">
                        <div className="tar_largo">
                            <div className="tar_imagen">
                                                           
                            </div>
                        </div>
                    </div> 
                    <div className="f tar_ancho">
                        <div className="tar_largo">
                            <div className="tar_imagen">
                                                           
                            </div>
                        </div>
                    </div>                                        
                </div>                                                                
            </body>                                    
            <Pie/>
        </div>
        
    ); 

}

export default ayuda; 