import React from 'react';
import LessonStore from '../../../LessonStore';
import sidebarStore from './SidebarStore';
import { Link as ReactLink } from 'react-router';

export default class SidebarLink extends React.Component {
  ChangeSidebarState() {
    let windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (windowWidth <= 768) {
      sidebarStore.revertCurrentState();
    }
  }

  handlePageChange() {
    // change page title.
    LessonStore.setLesson(this.props.url);
    this.ChangeSidebarState();
  }

  render() {
    let glyphoconType = 'glyphicon ';
    glyphoconType += this.props.isExercise ? 'glyphicon-pencil' : 'glyphicon-ok-sign';
    glyphoconType += ' nav-ico untaken-lesson';

    return (
      <li class="ripple-btn">
        <ReactLink to={this.props.url} onClick={() => this.handlePageChange()} activeClassName="nav-active" >
          <span class="item-align-fix">
            <i class={glyphoconType}></i>
              <span>{this.props.title}</span>
          </span>
        </ReactLink>
      </li>
    );
  }
}
