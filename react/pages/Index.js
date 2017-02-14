/* The main index page of the app.
 * This page needs editing
 */

import React from 'react';

export default class Index extends React.Component {
  render() {
    return (
      <div>
	  <p>Μάθε σήμερα ΔΩΡΕΑΝ ανάπτυξη web εφαρμογών μέσω βιντεοδιαλέξεων...</p>
	  <ul>
	    <li>HTML</li>
	    <li>CSS</li>
	    <li>PHP5</li>
	    <li>Γραφικά και εικόνες με την PHP GD</li>
	    <li>MYSQL</li>
	    <li>Μοντέλο MVC για σωστή δόμηση κώδικα</li>
	    <li>Javascript</li>
	    <li>Jquery &amp; Ajax</li>
	    <li>Θέματα σχετικά με ανάπτυξη ιστοσελίδων σε mobile συσκευές.</li>
	    <li>Θέματα ασφάλειας</li>
	    <li>Subversion </li>
	  </ul>
	  <div id="go-to-first-lesson">
	   <a href="/html-novice" id="first-lesson-button">Ξεκίνα το 1ο μάθημα τώρα!</a>
	  </div>
	</div>
    );
  }
}