import React from 'react';
import { Link } from 'react-router-dom';
import background from "../images/bgfinal.png";
import logo from "../images/logofinal.png";

const Home = () => (
    <div style={{ backgroundImage: `url(${background})`,
        width: '100vw',
        height: '100vh',
        }}>
        <div>
            <img style={{ paddingTop: '200px', width: '650px', paddingLeft: '100px' }} src= {logo} alt='logo'/>
                <Link style={{ position: 'absolute', top: '400px', left: '650px' }} className='btn btn-primary btn-lg' to='/login' role='button'> LOGIN </Link>
                <Link style={{ position: 'absolute', top: '400px', left: '750px' }} className='btn btn-primary btn-lg' to='/signup' role='button'> REGISTER </Link>
        </div>
    </div>
);

export default Home;
