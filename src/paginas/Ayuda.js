import React from 'react';
import '../App.css';
import Cabeza from '../componentes/Cabeza';
import Pie from '../componentes/Pie';
import BFantasmas from "../componentes/BFantasmas";

const ayuda = () => {

    return(
        <div className="App">
            <Cabeza />
            <BFantasmas nombre="Servicios" nombre2="Ayuda" nombre3="Registro"/>                                     
            <Pie/>
        </div>
        
    ); 

}

export default ayuda; 
