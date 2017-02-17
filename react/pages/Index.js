/* The main index page of the app.
 * This page needs editing
 */

import React from 'react';
import { browserHistory } from 'react-router';
import LessonStore from '../LessonStore';

export default class Index extends React.Component {
  getLesson() {
    this.setState({
      LessonDetails: LessonStore.getLesson()
    });
  }

  componentWillMount() {
    LessonStore.on('change', this.getLesson);
    this.getLesson();
  }

  componentWillUnmount() {
    LessonStore.removeListener('change', this.getLesson);
  }
  
  render() {
    return (
      <div>
	  <p>Μάθε σήμερα ΔΩΡΕΑΝ ανάπτυξη web εφαρμογών μέσω βιντεοδιαλέξεων...</p>
	  <ul>
	    <li>HTML</li>
	    <li>CSS</li>
	    <li>PHP</li>
	    <li>MYSQL</li>
	    <li>Javascript</li>
	    <li>Subversion</li>
	  </ul>
	  <div id="go-to-first-lesson">
	   	<button onClick={() => { browserHistory.push('/html-beginner'); }} id="first-lesson-button">Ξεκίνα το 1ο μάθημα τώρα!</button>
	  </div>
	  <div id="footer">
	   	<p>Όλο το υλικό του μαθήματος υπόκειται στην άδεια χρήσης <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons 4.0</a>.</p>
       	<p>Ο κώδικας της παρούσας ιστοσελίδας στην άδεια <a href="https://opensource.org/licenses/MIT">MIT</a>.</p>
      	<p><a href="https://github.com/GeorgeGkas/web-class.gr" >Διαβάστε περισσότερες πληροφορίες για αυτή την προσπάθεια!</a></p>
      </div>
	</div>
    );
  }
}
