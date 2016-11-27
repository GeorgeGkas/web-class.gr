import React from 'react';

import Title from './Header/Title'

import sidebarStore from './Container/Sidebar/SidebarStore.js';

export default class Header extends React.Component {
  render() {
    return (
      <header id="app-bar">
        <ul class="navbar-left col-xs-12 col-sm-4 col-md-3 col-lg-3" id="left-region">
          <li id="sidebar-reveal">
            <a id="jumbotron" onClick={() => sidebarStore.revertCurrentState()}></a>
          </li>
          <li>
            <h1 id="app-bar__website-title">Web-Class.gr</h1></li>
        </ul>
        <ul class="navbar-right hidden-xs col-sm-8 col-md-9 col-lg-9" id="right-region">
          <Title/>
        </ul>
      </header>
    );
  }
}
