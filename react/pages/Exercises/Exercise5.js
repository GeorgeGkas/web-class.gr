import React  from 'react';

export default class Exercise5 extends React.Component {
  render() {
    return (
      <section id="exercise-description">
          <div id="introduction">
            <p> <span class="glyphicon glyphicon-star"></span> Αυτή η εργασία αφορά βελτίωση της 4ης εργασίας. Σε περίπτωση που δεν έχετε ολοκληρώσει την 4η εργασία, σας προτείνουμε να τελειώσετε πρώτα τις απαιτήσεις της 4ης εργασίας πριν προχωρήσετε.  </p>
          </div>
          <div id="curriculum">
            <p> <span class="glyphicon glyphicon-education"></span> Ύλη: Διαλέξεις μέχρι και την 12η </p>
          </div>
          <div id="problem">
            <h3>Εκφώνηση</h3>
            <p>Ζητείται να προσθέσετε τις ακόλουθες δυνατότητες στο σύστημα του file uploader που έχετε κατασκευάσει:  </p>
            <ul>
              <li>Δημιουργία λογαριασμού χρήστη</li>
              <li>Login / Logout</li>
              <li>Αποθήκευση χρηστών στην βάση δεδομένων</li>
              <li>Αποθήκευση meta-πληροφοριών αρχείων στη βάση δεδομένων</li>
              <li>Αποθήκευση χρήστη που ανέβασε κάθε αρχείο</li>
              <li>Εμφάνιση ονόματος χρήστη στην λίστα των αρχείων</li>
              <li>Όλοι οι χρήστες μπορούν να κατεβάσουν τα αρχεία όλων</li>
            </ul>
            <p>Θα χρειαστείτε μία εγκατάσταση της MySQL και του phpMyAdmin. </p>
            <p><a href="http://web-class.gr/resources/mysql">Οδηγίες εγκατάστασης MySQL</a></p>
            <p><a href="http://web-class.gr/resources/phpmyadmin">Οδηγίες εγκατάστασης phpMyAdmin</a></p>
            <p>Για την διαχείριση της εισόδου των χρηστών, μπορείτε να επιλέξετε να χρησιμοποιήσετε δικά σας μπισκότα, ή να κάνετε χρήση της έτοιμης λειτουργίας συνόδων της PHP. </p>
            <p> Είναι καλό να ξοδέψετε κάποιο χρόνο για να σκεφτείτε ένα εύχρηστο σχήμα για την βάση δεδομένων σας. Αν το σχήμα σας δεν είναι καλοσχεδιασμένο, ενδέχεται να χάσετε αρκετό χρόνο στο να ξαναγράψετε τον κώδικά σας αν επιθυμείτε αργότερα να το αλλάξετε. </p>
            </div>
             <div id="tip">
            <p> <span class="glyphicon glyphicon-exclamation-sign"></span> Μία λύση για τον χωρισμό των PHP αρχείων είναι να έχετε 2 PHP αρχεία: Το πρώτο που θα τυπώνει την λίστα με τα υπάρχοντα αρχεία και μία φόρμα, και το δεύτερο το οποίο θα είναι το action της φόρμας για το ανέβασμα του αρχείου και το οποίο απλώς θα αποθηκεύει το αρχείο και θα επιστρέφει τον χρήστη στην προηγούμενη σελίδα.  </p>
          </div>
          <div id="solution">
            <p> <span class="glyphicon glyphicon-thumbs-up"></span> Ολοκληρώνοντας την εργασία σας μην διστάσετε να ρίξετε μια ματιά στις παρακάτω πρότυπες λύσεις:</p>
            <ul>
              <li><a href="/exercise-6"> Δες την 6η εργασία</a></li>
            </ul>
          </div>
        </section>
    );
  }
}