import React from 'react';
import '../App.css';
import Cabeza from "../componentes/Cabeza";
import Pie from "../componentes/Pie";
import BFantasmas from "../componentes/BFantasmas";
import BFantasma from "../componentes/BFantasma";


const home = () => {

    return(
        <div className="App">
        <Cabeza />                        
        <BFantasmas nombre="Servicios" nombre2="Ayuda" nombre3="Registro"/>  
        <body id="home">
            <h1>¡Bienvenido! al nuevo portal de</h1>
            <h1>Vive Deporte</h1>
            <h2>Un mal dia puede mejorar si sales a correr</h2>  
            <BFantasma nombre="Conoce más" link="/Servicios"/>
        </body>       
        
        <Pie />
         </div>

    );

}

export default home; 