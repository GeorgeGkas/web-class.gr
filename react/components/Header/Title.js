import React from 'react';
import LessonStore from '../../LessonStore';

export default class Title extends React.Component {
  constructor() {
    super();
    this.state = {
      LessonDetails: LessonStore.getLesson()
    }
  }
  componentWillMount() {
    LessonStore.on('change', () => {
      this.setState({
        LessonDetails: LessonStore.getLesson()
      });
    });
  }

  render() {
    return (
      <h2 class="text-center" id="app-bar__lesson-title">{this.state.LessonDetails.title}</h2>
    );
  }
}