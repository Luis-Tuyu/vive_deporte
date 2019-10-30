import React from 'react';
import {HashRouter, Switch, Route} from 'react-router-dom';
import Servicios from './paginas/Servicios';
import Ayuda from './paginas/Ayuda';
import Registro from './paginas/Registro';
import Home from './paginas/Home';
import Eventos from './paginas/Eventos';
 

const routes = () =>{
    return(
        <HashRouter>
            <Switch>
                <Route path="/" component={Home} exact/>
                <Route path="/Servicios" component={Servicios} exact/>
                <Route path="/Registro" component={Registro} />
                <Route path="/Ayuda" component={Ayuda} />
                <Route path="/Eventos" component={Eventos} />
            </Switch>
        </HashRouter>
        
    );
}
export default routes;
