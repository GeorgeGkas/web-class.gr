import React  from 'react';

export default class Exercise1 extends React.Component {
  render() {
    return (
      <section id="exercise-description">
          <div id="introduction">
            <p> <span class="glyphicon glyphicon-star"></span> Πλέον είστε σε θέση να δημιουργήσετε την δικιά σας σελίδα!</p>
          </div>
          <div id="curriculum">
            <p> <span class="glyphicon glyphicon-education"></span> Ύλη: Διαλέξεις 1 και 2 </p>
          </div>
          <div id="problem">
            <h3>Εκφώνηση</h3>
            <p>Δημιουργείστε μία προσωπική ιστοσελίδα που να περιλαμβάνει το <strong>όνομά</strong> σας, το <strong>επώνυμό</strong>  σας, και το <strong>e-mail</strong>  σας. Προσθέστε λίγα λόγια για τον εαυτό σας, μία φωτογραφία που σας αρέσει, μία λίστα, και έναν πίνακα της επιλογής σας. </p>
          </div>
          <div id="solution">
            <p> <span class="glyphicon glyphicon-thumbs-up"></span> Ολοκληρώνοντας την εργασία σας μην δυστάσετε να ρίξετε μια ματιά στις παρακάτω πρότυπες λύσεις:</p>
            <ul>
              <li><a href="http://web-class.gr/resources/assignment1/solutions/makis/homepage.html"> Μάκης Αρσένης</a></li>
               <li><a href="http://web-class.gr/resources/assignment1/solutions/christine/site.html"> Χριστίνα Τσικαλάκη</a></li>
               <li><a href="http://web-class.gr/resources/assignment1/solutions/giorgos/site.html"> Γιώργος Παυλάκος</a></li>
            </ul>
          </div>
        </section>
    );
  }
}