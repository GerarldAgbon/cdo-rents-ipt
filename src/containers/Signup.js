import React, { useState } from 'react';
import { Link, Navigate } from 'react-router-dom';
import { connect } from 'react-redux';
import { signup } from '../actions/auth';
import background from "../images/bgfinal.png";
import logo from "../images/logofinal.png";

const Signup = ({ signup, isAuthenticated }) => {
    const [accountCreated, setAccountCreated] = useState(false);
    const [formData, setFormData] = useState({
        first_name: '',
        last_name: '',
        email: '',
        password: '',
        re_password: ''
    });

    const { first_name, last_name, email, password, re_password } = formData;

    const onChange = e => setFormData({ ...formData, [e.target.name]: e.target.value });

    const onSubmit = e => {
        e.preventDefault();

        if (password === re_password) {
            signup(first_name, last_name, email, password, re_password);
            setAccountCreated(true);
        }
    };

    if (isAuthenticated) {
        return <Navigate to='/' />
    }
    if (accountCreated) {
        return <Navigate to='/login' />
    }

    return (
        <div style={{ backgroundImage: `url(${background})`,  width: '100vw', height: '100vh' }} >
            <img style={{ paddingTop: '200px', width: '650px', paddingLeft: '100px' }} src= {logo} alt='logo'/>
            <div style={{ position:'absolute', top: '250px', left: '700px' }}>
                <h1>SIGN UP</h1>
                <p>Create your Account</p>
                <form onSubmit={e => onSubmit(e)}>
                    <div style={{ padding: '10px' }} className='form-group'>
                        <input
                            className='form-control'
                            type='text'
                            placeholder='First Name*'
                            name='first_name'
                            value={first_name}
                            onChange={e => onChange(e)}
                            required
                        />
                    </div>
                    <div style={{ padding: '10px' }} className='form-group'>
                        <input
                            className='form-control'
                            type='text'
                            placeholder='Last Name*'
                            name='last_name'
                            value={last_name}
                            onChange={e => onChange(e)}
                            required
                        />
                    </div>
                    <div style={{ padding: '10px' }} className='form-group'>
                        <input
                            className='form-control'
                            type='email'
                            placeholder='Email*'
                            name='email'
                            value={email}
                            onChange={e => onChange(e)}
                            required
                        />
                    </div>
                    <div style={{ paddingTop: '10px', paddingLeft: '15px' }}>
                        <button className='btn btn-primary' type='submit'>Register</button>
                    </div>
                </form>
                <p className='mt-3'>
                    Already have an account? <Link to='/login'>Sign In</Link>
                </p>
            </div>
            <div style={{ padding: '10px', position: 'absolute', top: '345px', right: '180px' }} className='form-group'>
                        <input
                            className='form-control'
                            type='password'
                            placeholder='Password*'
                            name='password'
                            value={password}
                            onChange={e => onChange(e)}
                            minLength='6'
                            required
                        />
                    </div>
                    <div style={{ padding: '10px', position: 'absolute', top: '405px', right: '180px' }} className='form-group'>
                        <input
                            className='form-control'
                            type='password'
                            placeholder='Confirm Password*'
                            name='re_password'
                            value={re_password}
                            onChange={e => onChange(e)}
                            minLength='6'
                            required
                        />
                    </div>
        </div>
    );
};

const mapStateToProps = state => ({
    isAuthenticated: state.auth.isAuthenticated
});

export default connect(mapStateToProps, { signup })(Signup);
