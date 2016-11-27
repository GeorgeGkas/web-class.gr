import React from 'react';
import { Link as ReactLink } from 'react-router';
import sidebarStore from './Sidebar/SidebarStore';
import lessonValues from '../../lessonValues';
import LessonStore from '../../LessonStore';
import SidebarLink from './Sidebar/SidebarLink';


export default class Sidebar extends React.Component {
  constructor() {
    super();
    this.state = {
      SidebarIsCollapse: sidebarStore.getCurrentState()
    }
    this.NavMdPlaceholderClass = 'hidden-xs col-sm-4 col-md-3 col-lg-3';
  }

  componentWillMount() {
    sidebarStore.on('change', () => {
      this.setState({ SidebarIsCollapse: sidebarStore.getCurrentState() });
      this.ChangeSidebarState();
    });
    this.RenderMainMenu();
  }

  ChangeSidebarState() {
    const NAV_DefaultClasses = "col-sm-4 col-md-3 col-lg-3 ";
    if (this.state.SidebarIsCollapse) {
      this.NavMdPlaceholderClass = NAV_DefaultClasses + "slideInLeft";
    } else {
      this.NavMdPlaceholderClass = NAV_DefaultClasses + "slideOffLeft";
    }
  }

  RenderMainMenu() {
    this.main_menu = [];
    for (let link of lessonValues) {
      let { Id, url, isExercise, title } = link;
      this.main_menu.push(<SidebarLink key={Id} url={url} isExercise={isExercise} title={title}/>);
    }
  }

  SetLessonDetails() {
    LessonStore.setLessonTitle('Δωρεάν μαθήματα ανάπτυξης web εφαρμογών.');
  }

  render() {
    return (
      <div class={this.NavMdPlaceholderClass} id="nav-md-placeholder">
        <nav id="sidebar">
          <ul id="main-menu">
            <li class="ripple-btn">
                <ReactLink to="/" onClick={this.SetLessonDetails.bind(this)}>
                  <span class="item-align-fix">
                    <i class="glyphicon glyphicon-home" style={{'marginRight': '10px'}}></i>
                    <strong>
                      <span>AΡΧΙΚΗ</span>
                    </strong>
                  </span>
                </ReactLink>
              </li>

              {this.main_menu}
          </ul>
        </nav>
      </div>
    );
  }
}
