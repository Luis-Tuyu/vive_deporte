import React, {Component} from 'react'; 

class fondo extends Component{
    state={};

    render(){
        return(
            <div className="App">
                <img src={this.props.foto}>
                </img>                 
            </div>            
        )
    }
}
export default fondo; 