import React from 'react';

import sidebarStore from '../Sidebar/SidebarStore.js';

export default class Header extends React.Component {
  constructor() {
    super();
    this.state = {
      SidebarIsCollapse: sidebarStore.getCurrentState()
    }
    this.OverlayClass = 'hidden';
  }

  componentWillMount() {
    sidebarStore.on('change', () => {
      this.setState({ SidebarIsCollapse: sidebarStore.getCurrentState() });
      this.SetOverlayState();
    });
  }

  SetOverlayState() {
    if (this.state.SidebarIsCollapse) {
      this.OverlayClass = "hidden-sm hidden-md hidden-lg";
    } else {
      this.OverlayClass = "hidden";
    }
  }

  render() {
    return (
      <div class={this.OverlayClass} id="overlay"></div>
    );
  }
}
