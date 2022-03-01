/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');
require('./components/SideBar/SideBarNav');
require('./components/SideBar/NavItem');

import 'bootstrap/dist/css/bootstrap.min.css';  //this doesn't do anything, testing how exactly to get css to work
import React from 'react'
import ReactRenderer from './ReactRenderer'

import Header from './components/Header'

const components = [
    {
        name: "Header",
        component: <Header />,
    },
]

new ReactRenderer(components).renderAll()
