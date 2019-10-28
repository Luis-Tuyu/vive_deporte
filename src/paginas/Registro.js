import React, {Component} from 'react';
import '../App.css';
import Formulario from '../componentes/Formulario';
import Cabeza from '../componentes/Cabeza';
import Pie from '../componentes/Pie';
import BFantasmas from "../componentes/BFantasmas";



const registro = () => {

    return(
        <div className="App">   
            <Cabeza />
            <BFantasmas nombre="Servicios" nombre2="Ayuda" nombre3="Registro"/>               
            <Formulario />                                                   
            <Pie />
        </div>

    );

}

export default registro; 
