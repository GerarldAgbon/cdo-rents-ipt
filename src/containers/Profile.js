import React, { useState } from 'react';
import { Link, Navigate } from 'react-router-dom';
import background from "../images/bgfinal.png";
import logo from "../images/logofinal.png";
import { FaFileSignature } from "react-icons/fa";
import { FaEnvelope } from "react-icons/fa";

const Profile = () => {
    return (
        <div style={{ backgroundImage: `url(${background})`,  width: '100vw',
            height: '100vh' }} >
            <img style={{ paddingTop: '200px', width: '650px', paddingLeft: '100px' }} src= {logo} alt='logo'/>
            <div style={{ position:'absolute', top: '50px', left: '700px' }}>
                <h1 style={{ paddingLeft: '190px', paddingTop: '200px', fontFamily: 'Quicksand', fontSize: 60}}>PROFILE</h1>
                <p style={{ fontFamily: 'Quicksand', fontSize: '20px'}}>Dashboard</p>
            </div>
            <div style={{ position:'absolute', bottom: '120px', left: '690px' }}>
                <h3 style={{ fontFamily: 'Quicksand', fontSize: '30px' }}> <FaFileSignature/>
                    Last Name: AGBON
                </h3>
                <h3 style={{ fontFamily: 'Quicksand', fontSize: '30px' }}> <FaFileSignature/>
                    Last Name: GERARLD
                </h3>
                <h3 style={{ fontFamily: 'Quicksand', fontSize: '30px' }}> <FaEnvelope/>
                    Registered Email: anonymousyadz@gmail.com
                </h3>
            </div>
            <p style={{ position:'absolute', bottom: '60px', left: '690px', fontFamily: 'Quicksand', fontSize: '20px', paddingTop: '10px'}}>
                    Do you want to exit? <Link to='/login'>Logout</Link>
            </p>
        </div>
    );
};

export default Profile;