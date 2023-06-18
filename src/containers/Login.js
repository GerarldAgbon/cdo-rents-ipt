import React, { useState } from 'react';
import { Link, Navigate } from 'react-router-dom';
import { connect } from 'react-redux';
import { login } from '../actions/auth';
import background from "../images/bgfinal.png";
import logo from "../images/logofinal.png";

const Login = ({ login, isAuthenticated }) => {
    const [formData, setFormData] = useState({
        email: '',
        password: '' 
    });

    const { email, password } = formData;

    const onChange = e => setFormData({ ...formData, [e.target.name]: e.target.value });

    const onSubmit = e => {
        e.preventDefault();

        login(email, password);
    };

    if (isAuthenticated) {
        return <Navigate to='/' />
    }

    return (
        <div style={{ backgroundImage: `url(${background})`,  width: '100vw',
            height: '100vh' }} >
            <img style={{ paddingTop: '200px', width: '650px', paddingLeft: '100px' }} src= {logo} alt='logo'/>
            <div style={{ position:'absolute', top: '50px', left: '700px' }}>
                <h1 style={{ paddingLeft: '190px', paddingTop: '200px', fontFamily: 'Quicksand', fontSize: 60}}>SIGN IN</h1>
                <p style={{ fontFamily: 'Quicksand', fontSize: '20px'}}>Sign into your Account</p>
                <form onSubmit={e => onSubmit(e)}>
                    <div style={{ width: '300px'}} className='form-group'>
                        <input
                            className='form-control mb-3'
                            type='email'
                            placeholder='Email'
                            name='email'
                            value={email}
                            onChange={e => onChange(e)}
                            required
                        />
                    </div>
                    <div style={{ width: '300px'}} className='form-group mb-3'>
                        <input
                            className='form-control'
                            type='password'
                            placeholder='Password'
                            name='password'
                            value={password}
                            onChange={e => onChange(e)}
                            minLength='6'
                            required
                        />
                    </div>
                    <Link to='/profile'>
                        <button className='btn btn-primary' type='submit'>LOGIN</button>
                    </Link>
                </form>
                <p style={{ fontFamily: 'Quicksand', fontSize: '20px', paddingTop: '10px'}}>
                    Don't have an account? <Link to='/signup'>Sign Up</Link>
                </p>
            </div>
        </div>
    );
};

const mapStateToProps = state => ({
    isAuthenticated: state.auth.isAuthenticated
});

export default connect(mapStateToProps, { login })(Login);