import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

import Home from './containers/Home';
import Login from './containers/Login';
import Signup from './containers/Signup';
import Activate from './containers/Activate';
import Profile from './containers/Profile';
import Layout from './hocs/Layout';
import { Provider } from 'react-redux';
import store from './store';

const App = () => (
   <Provider store={store}>
        <Router>
            <Layout>
                <Routes>
                    <Route path='/' element={<Home />} />
                    <Route path='/login' element={<Login />} />
                    <Route path='/signup' element={<Signup />} />
                    <Route path='/profile' element={<Profile />} />
                    <Route path='/activate/:uid/:token' element={<Activate />} />
                </Routes>
            </Layout>
        </Router>
   </Provider>
);

export default App;