import React from 'react';
import LessonStore from '../../../LessonStore';
import { Link as ReactLink } from 'react-router';

export default class SidebarLink extends React.Component {
  SetPageTitle() {
    LessonStore.setLesson(this.props.url);
  }

  render() {
    let glyphoconType = 'glyphicon ';
    glyphoconType += this.props.isExercise ? 'glyphicon-pencil' : 'glyphicon-ok-sign';
    glyphoconType += ' nav-ico untaken-lesson';

    return (
      <li class="ripple-btn">
        <ReactLink to={this.props.url} onClick={() => this.SetPageTitle()} >
          <span class="item-align-fix">
            <i class={glyphoconType}></i>
              <span>{this.props.title}</span>
          </span>
        </ReactLink>
      </li>
    );
  }
}
