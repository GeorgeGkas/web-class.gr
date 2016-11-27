import React  from 'react';

export default class Exercise2 extends React.Component {
  render() {
    return (
      <section id="exercise-description">
          <div id="introduction">
            <p> <span class="glyphicon glyphicon-star"></span> Αυτή είναι μία κλασική εργασία που ανατίθεται σε όσους μαθαίνουν HTML και CSS. Ονομάζεται half cleanroom επειδή δίνεται μόνο ο μισός κώδικας, ενώ ο υπόλοιπος μισός πρέπει να γραφτεί από εσάς. </p>
          </div>
          <div id="curriculum">
            <p> <span class="glyphicon glyphicon-education"></span> Ύλη: Διαλέξεις μέχρι και την 4η  </p>
          </div>
          <div id="problem">
            <h3>Εκφώνηση</h3>
            <p>Ο βιρτουόζος σχεδιαστής ιστοσελίδων Μπάμπης Σιεσές σχεδίασε ένα εναλλακτικό design για την σελίδα XKCD, τη διάσημη σειρά comic. Δυστυχώς, όσο έλειπε από τον υπολογιστή του, η γάτα του πάτησε τα πλήκτρα Shift + Del με αποτέλεσμα το αρχείο CSS που είχε γράψει να εξαφανιστεί από προσώπου γης. Για καλή του τύχη, είχε κρατήσει ένα screenshot και έτσι θυμάται την εμφάνιση της σελίδας που είχε φτιάξει. Είχε επίσης σημειώσει τα χρώματα και τις γραμματοσειρές που χρησιμοποίησε. Η δική σας δουλειά είναι να ξαναγράψετε το αρχείο CSS με βάση τα στοιχεία αυτά. </p>
            <p> Το αποτέλεσμα μετά την εφαρμογή του CSS θα πρέπει να φαίνεται πανομοιότυπο με την έκδοση που φαίνεται στο screenshot. </p>
            <ul>Δίνονται
              <li><a href="http://web-class.gr/resources/assignment2/sandwich.html">Το αρχείο HTML του Μπάμπη</a></li>
              <li><a href="http://web-class.gr/resources/assignment2/sandwich.png">Η εικόνα του comic</a></li>
              <li><a href="http://web-class.gr/resources/assignment2/menu.png">Η εικόνα φόντου που χρησιμοποίηθηκε</a></li>
              <li><a href="http://web-class.gr/resources/assignment2/screenshot.png">Το screenshot που είχε τραβήξει</a></li>
              <li><a href="http://web-class.gr/resources/assignment2/notes.png">Οι σημειώσεις του Μπάμπη</a></li>
            </ul>
            </div>
          <div id="solution">
            <p> <span class="glyphicon glyphicon-thumbs-up"></span> Ολοκληρώνοντας την εργασία σας μην δυστάσετε να ρίξετε μια ματιά στις παρακάτω πρότυπες λύσεις:</p>
            <ul>
              <li><a href="http://web-class.gr/resources/assignment2/solution/manda-go/style.css"> Μαρία Γκολιομύτη</a></li>
            </ul>
          </div>
        </section>
    );
  }
}