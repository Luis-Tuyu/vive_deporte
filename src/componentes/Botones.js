import React, {Component} from 'react';

class botones extends Component{
    state={};
   
    render(){
        return(               
                <button id="btn" type='button' onClick={this.props.event}> {this.props.nombre} </button>                   
        )
    }
}
export default botones; 