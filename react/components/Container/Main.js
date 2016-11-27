import React from 'react';

import Overlay from './Main/Overlay';
import sidebarStore from './Sidebar/SidebarStore.js';

export default class Main extends React.Component {
  constructor() {
    super();
    this.state = {
      SidebarIsCollapse: sidebarStore.getCurrentState()
    }
    this.MainContentPlaceholder = 'col-xs-12 col-sm-8 col-md-9 col-lg-9';
  }

  componentWillMount() {
    sidebarStore.on('change', () => {
      this.setState({ SidebarIsCollapse: sidebarStore.getCurrentState() });
      this.ChangePlaceholderState();
    });
  }

  ChangePlaceholderState() {
    const MAIN_DefaultClasses = "col-xs-12 col-sm-8 col-md-9 col-lg-9 ";

    if (this.state.SidebarIsCollapse) {
      this.MainContentPlaceholder = MAIN_DefaultClasses;
    } else {
      this.MainContentPlaceholder = MAIN_DefaultClasses + 'center-col';
    }
  }
  render() {
    return (
      <main class={this.MainContentPlaceholder} id="main-content-placeholder">
        <Overlay />
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-col">
        {this.props.children}
        </div>
      </main>
    );
  }
}
