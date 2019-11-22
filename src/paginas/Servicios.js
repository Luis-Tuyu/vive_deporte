import React from 'react';
import '../App.css';
import Cabeza from "../componentes/Cabeza";
import Pie from "../componentes/Pie";
import BFantasmas from "../componentes/BFantasmas";
import {Link} from 'react-router-dom';
import Popup from "../componentes/Popup";

const servicios = () => {

    return(
        <div className="App">
        <Cabeza />      
        <BFantasmas nombre="Servicios" nombre2="Ayuda" nombre3="Registro"/>              
        <body id="home">
            <h1>Usuarios</h1>                                       
                <div className="bfan2">
                    <Popup name="Usuarios"/>
                    <Link to="/Eventos" className="bfan2 secundario"> Registro de carreras</Link> 
                </div>         
                
            <hr></hr>
            <h1>Administradores</h1>                           
            <div className="bfan2"> 
                <Popup name="Administradores"/>                 
                <Link to="/Ayuda" className="bfan2 secundario"> Registro de carreras</Link>                
                <Link to="/Ayuda" className="bfan2 tercero"> Edicion de Datos</Link>                
            </div>
        </body>

        <Pie />
    </div>

    );

}

export default servicios; 