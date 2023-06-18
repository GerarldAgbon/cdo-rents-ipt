import React, { useState } from 'react';
import { Navigate, useParams } from 'react-router-dom';
import { connect } from 'react-redux';
import { verify } from '../actions/auth';
import background from "../images/bgfinal.png";
import logo from "../images/logofinal.png";

const Activate = ({ verify }) => {
    const [verified, setVerified] = useState(false);
    const { uid, token } = useParams();
  
    const verify_account = () => {
      verify(uid, token);
      setVerified(true);
    };

    if (verified) {
        return <Navigate to='/' />
    }

    return (
        <div style={{ backgroundImage: `url(${background})`,  width: '100vw',
        height: '100vh' }}>
            <img style={{ paddingTop: '200px', width: '650px', paddingLeft: '100px' }} src= {logo} alt='logo'/>
            <div 
                style={{ position:'absolute', top: '50px', left: '700px' }}
            >
                <h1>Verify your Account:</h1>
                <button
                    onClick={verify_account}
                    style={{ marginTop: '50px' }}
                    type='button'
                    className='btn btn-primary'
                >
                    Verify
                </button>
            </div>
        </div>
    );
};

export default connect(null, { verify })(Activate);
