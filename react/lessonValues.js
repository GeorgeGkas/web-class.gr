const lessonValues = [{
  Id: 1,
  title: 'ΕΙΣΑΓΩΓΗ ΣΤΗΝ HTML',
  description: 'Εισαγωγή στις βασικές έννοιες της HTML.',
  syllabus: [
    'Βασική σύνταξη HTML',
    'Διαχωρισμός περιεχομένου/μορφοποίησης',
    'Βασική σύνταξη HTML, ετικέτες',
    'Τίτλοι, παράγραφοι, επικεφαλίδες',
    'Λίστες, σύνδεσμοι, εικόνες',
    'Πίνακες'
  ],
  url: 'html-novice',
  isExercise: false,
  videoURL: 'lyyoqlneOIQ',
  presentationSheetURL: 'http://web-class.gr/slides/01_htmlbeginner.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'HTML Beginner Tutorial',
    url: 'http://www.htmldog.com/guides/html/beginner/'
  }],
  deepening: []
}, {
  Id: 2,
  title: 'ΕΙΣΑΓΩΓΗ ΣΤΗΝ CSS',
  description: 'Εισαγωγή στις βασικές έννοιες της CSS.',
  syllabus: [
    'Βασική σύνταξη CSS',
    'Συνδυασμός HTML/CSS',
    'Επιλογείς, ιδιότητες, τιμές',
    'Χρώματα',
    'Γραμματοσειρές, μορφοποίηση κειμένου',
    'Box model, περιθώρια και πλαίσια'

  ],
  url: 'css-novice',
  isExercise: false,
  videoURL: 'pJL2oqSWyuk',
  presentationSheetURL: 'http://web-class.gr/slides/02_cssbeginner.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'CSS Beginner Tutorial',
    url: 'http://www.htmldog.com/guides/css/beginner/'
  }],
  deepening: []
}, {
  Id: 3,
  title: 'ΕΡΓΑΣΙΑ 1',
  description: '',
  syllabus: [],
  url: 'exercise-1',
  isExercise: true,
}, {
  Id: 4,
  title: 'ΠΕΡΙΣΣΟΤΕΡΗ HTML',
  description: 'Η συνέχεια της πρώτης παράδωσης για την HTML.',
  syllabus: [
    'Φόρμες',
    'Σημασιολογικά κενές ετικέτες (div, span)',
    'Ετικέτες meta',
    '"Κακές" ετικέτες',
    'Περισσότερα για πίνακες',
    'Λίστες ορισμών',
    'Ορισμός γλώσσας και κωδικοποίησης'
  ],
  url: 'html-intermediate',
  isExercise: false,
  videoURL: '_lwQJGrYtBU',
  presentationSheetURL: 'http://web-class.gr/slides/03_htmlintermediate.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'HTML Intermediate Tutorial',
    url: 'http://www.htmldog.com/guides/html/intermediate/'
  }, {
    Id: 2,
    title: 'Unicode and Character Sets',
    url: 'www.joelonsoftware.com/articles/Unicode.html'
  }],
  deepening: []
}, {
  Id: 5,
  title: 'ΠΕΡΙΣΣΟΤΕΡΗ CSS',
  description: 'Η συέχεια της πρώτης παράδωσης για την CSS.',
  syllabus: [
    'Κλάσεις και ids',
    'Ψευδοκλάσεις',
    'Ομαδοποίηση, εμφώλευση',
    'Συντομογραφίες',
    'Τυπογραφία',
    'Εικόνες φόντου'
  ],
  url: 'css-intermediate',
  isExercise: false,
  videoURL: 'WeTK7SW1lWA',
  presentationSheetURL: 'http://web-class.gr/slides/04_cssintermediate.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'CSS Intermediate Tutorial',
    url: 'http://www.htmldog.com/guides/css/intermediate/'
  }],
  deepening: []
}, {
  Id: 6,
  title: 'ΕΡΓΑΣΙΑ 2',
  description: '',
  syllabus: [],
  url: 'exercise-2',
  isExercise: true
}, {
  Id: 7,
  title: 'ΠΡΟΧΩΡΗΜΕΝΗ HTML',
  description: 'Προχωρημένα θέματα της HTMl.',
  syllabus: [
    'Πιο προχωρημένη HTML',
    'Πολλά πρακτικά παραδείγματα'
  ],
  url: 'html-advance',
  isExercise: false,
  videoURL: 'gzvjLfpor74',
  presentationSheetURL: 'http://web-seminar.softlab.ntua.gr/slides/05_htmladvanced.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'HTML Advanced Tutorial',
    url: 'http://www.htmldog.com/guides/html/advanced/'
  }],
  deepening: [{
    Id: 1,
    title: 'HTMLDog Book',
    url: 'https://www.amazon.com/HTML-Dog-Best-Practice-Guide-XHTML/dp/0321311396'
  }]
}, {
  Id: 8,
  title: 'ΠΡΟΧΩΡΗΜΕΝΗ CSS',
  description: 'Προχωρημένα θέματα της CSS.',
  syllabus: [
    'Προτεραιότητα',
    'Floats',
    'Θέση και μέγεθος',
    'Προχωρημένο box model',
    'Πρακτικά παραδείγματα'
  ],
  url: 'css-advance',
  isExercise: false,
  videoURL: 'LbdkFPgUics',
  presentationSheetURL: 'http://web-class.gr/slides/06_cssadvanced.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'CSS Advanced Tutorial',
    url: 'http://www.htmldog.com/guides/css/advanced/'
  }],
  deepening: [{
    Id: 1,
    title: 'CSS: The Definitive Guide',
    url: 'www.amazon.com/CSS-Definitive-Guide-Eric-Meyer/dp/0596527330'
  }]

}, {
  Id: 9,
  title: 'ΕΡΓΑΣΙΑ 3',
  description: '',
  syllabus: [],
  url: 'exercise-3',
  isExercise: true
}, {
  Id: 10,
  title: 'ΔΙΚΤΥΑΚΑ ΘΕΜΑΤΑ',
  description: '',
  syllabus: [
    'Αρχιτεκτονική client/server',
    'Πρωτόκολλα',
    'TCP/IP',
    'DNS',
    'HTTP, servers και clients, GET / POST'
  ],
  url: 'networks',
  isExercise: false,
  videoURL: 'O4K6K8-ylVo',
  presentationSheetURL: 'http://web-class.gr/slides/07_networks.pdf',
  suggestedReading: [],
  deepening: [{
    Id: 1,
    title: 'Computer Networks',
    url: 'http://www.amazon.com/Computer-Networks-5th-Andrew-Tanenbaum/dp/0132126958/ref=dp_ob_title_bk'
  }]
}, {
  Id: 11,
  title: 'ΕΙΣΑΓΩΓΗ ΣΤΗΝ PHP',
  description: 'Εισαγωγή στις βασικές έννοιες της PHP.',
  syllabus: [
    'Βασική σύνταξη PHP',
    'Συνδυασμός PHP και HTML',
    'Φόρμες (GET/POST)',
    'Έλεγχος ροής (if, else/elseif, switch, for, while/do)',
    'Βασικοί τύποι δεδομένων',
    'Μεταβλητές',
    'Σταθερές',
    'Τελεστές',
    'Συναρτήσεις'
  ],
  url: 'php-novice',
  isExercise: false,
  videoURL: 'UkXKSbxwmAQ',
  presentationSheetURL: 'http://web-class.gr/slides/08_phpbeginner.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'W3School: PHP 5 Tutorial',
    url: 'http://www.w3schools.com/php/default.asp'
  }],
  deepening: []
}, {
  Id: 12,
  title: 'ΠΕΡΙΣΣΟΤΕΡΗ PHP',
  description: 'Η συνέχεια της πρώτης παράδωσης για την PHP.',
  syllabus: [
    'Χωρισμός κώδικα σε αρχεία',
    'Εμβέλεια μεταβλητών',
    'Πίνακες και λεξικά',
    'foreach',
    'Χειρισμός και ανέβασμα αρχείων',
    'Μπισκότα και σύνοδοι'
  ],
  url: 'php-intermediate',
  isExercise: false,
  videoURL: 'eqPsI2Hyk-M',
  presentationSheetURL: 'http://web-class.gr/slides/09_phpintermediate.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'W3School: PHP 5 Tutorial (Advance Section)',
    url: 'http://www.w3schools.com/php/default.asp'
  }],
  deepening: []
}, {
  Id: 13,
  title: 'ΕΡΓΑΣΙΑ 4',
  description: '',
  syllabus: [],
  url: 'exercise-4',
  isExercise: true
}, {
  Id: 14,
  title: 'PHP GD',
  description: 'Πρόκειται για ένα διασκεδαστικό και χρήσιμο θέμα που αναδεικνύει τις πολλές δυνατότητες της PHP, αλλά δεν απαιτείται για την παρακολούθηση των επόμενων, ούτε για την επίλυση ασκήσεων.',
  syllabus: [
    'Επεξεργασία εικόνας με την βιβλιοθήκη GD',
    'Κατασκευή προγράμματος γραφικών παραστάσεων'
  ],
  url: 'php-gd',
  isExercise: false,
  videoURL: '5ce9EgCJ1sc',
  suggestedReading: [],
  deepening: []
}, {
  Id: 15,
  title: 'ΕΙΣΑΓΩΓΗ ΣΤΗΝ MYSQL',
  description: 'Εισαγωγή στις βασικέ έννοιες της MYSQL.',
  syllabus: [
    'Εισαγωγή στις βάσεις δεδομένων',
    'Τι είναι βάση',
    'Πίνακες, στήλες, πεδία',
    'Σχεδιασμός σχήματος',
    'Δημιουργία και επεξεργασία σχήματος με phpMyAdmin',
    'MyQSL και SQL',
    'Βασική σύνταξη SQL',
    'Επιλογή εγγραφών',
    'Φίλτρα WHERE, λογικοί τελεστές, IN και BETWEEN',
    'Εισαγωγή, διαγραφή, και ενημέρωση εγγραφών'
  ],
  url: 'mysql-novice',
  isExercise: false,
  videoURL: '1qPMeRK73jU',
  presentationSheetURL: 'http://web-class.gr/slides/10_mysqlbeginner.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'W3School: PHP MySQL Database',
    url: 'http://www.w3schools.com/php/php_mysql_intro.asp'
  }, {
    Id: 2,
    title: 'W3School: SQL Tutorial',
    url: 'http://www.w3schools.com/sql/default.asp'
  }],
  deepening: []
}, {
  Id: 16,
  title: 'ΠΕΡΙΣΣΟΤΕΡΗ MYSQL',
  description: 'Η συνέχεια της πτώτης διάλεξης για την MYSQL.',
  syllabus: [
    'Ταξινόμηση',
    'Όρια',
    'NULL',
    'Περισσότερες πράξεις, σύγκριση',
    'Εσωτερική ένωση',
    'Αριστερή ένωση',
    'Ημερομηνίες'
  ],
  url: 'mysql-intermediate',
  isExercise: false,
  videoURL: 'jOT9wprk7LI',
  presentationSheetURL: 'http://web-class.gr/slides/11_mysqlintermediate.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'W3School: SQL Tutorial (Advance)',
    url: 'http://www.w3schools.com/sql/sql_top.asp'
  }],
  deepening: [{
    Id: 1,
    title: 'MySQL Cookbook',
    url: 'https://www.amazon.com/MySQL-Cookbook-Paul-DuBois/dp/059652708X'
  }]
}, {
  Id: 17,
  title: 'ΕΡΓΑΣΙΑ 5',
  description: '',
  syllabus: [],
  url: 'exercise-5',
  isExercise: true
}, {
  Id: 18,
  title: 'ΠΡΟΧΩΡΗΜΕΝΗ PHP',
  description: 'Ο George Tziralis από το OpenFund έκλεισε την παράδοση με μία δεκάλεπτη ομιλία.',
  syllabus: [
    'Πιο προχωρημένη MySQL',
    'Αυτοενώσεις',
    'Ομαδοποίηση',
    'Πολλά παραδείγματα PHP/MySQL'
  ],
  url: 'php-advance',
  isExercise: false,
  videoURL: 'tCrAKYMESu8',
  presentationSheetURL: 'http://web-class.gr/slides/12_phpadvanced.pdf',
  suggestedReading: [],
  deepening: [{
    Id: 1,
    title: 'PHP Cookbook',
    url: 'https://www.amazon.com/PHP-Cookbook-Solutions-Examples-Programmers/dp/0596101015/ref=pd_sim_b_4'
  }]
}, {
  Id: 19,
  title: 'ΘΕΜΑΤΑ ΔΟΜΗΣ',
  description: 'Η διάλεξη αφορά την σωστή συγγραφή κώδικα.',
  syllabus: [
    'Δόμηση με συναρτήσεις',
    'Front-end και templates/views',
    'Back-end και models',
    'Controllers',
    'Το μοντέλο MVC'
  ],
  url: 'app-structure',
  isExercise: false,
  videoURL: 'dgQHfKYTDkk',
  presentationSheetURL: 'http://web-class.gr/slides/13_structure.pdf',
  suggestedReading: [],
  deepening: [{
    Id: 1,
    title: 'Gang of Four',
    url: 'https://www.amazon.com/Design-Patterns-Elements-Reusable-Object-Oriented/dp/0201633612'
  }]
}, {
  Id: 20,
  title: 'ΕΙΣΑΓΩΓΗ ΣΤΗΝ JAVASCRIPT',
  description: 'Ο Σταύρος Μεσσήνης από το CoLab έκλεισε την παράδοση με μία πεντάλεπτη ομιλία. ',
  syllabus: [
    'Βασική σύνταξη Javascript',
    'Συνδυασμός Javascript και HTML',
    'Έλεγχος ροής (if, else, switch, for, while)',
    'Βασικοί τύποι δεδομένων',
    'Μεταβλητές',
    'Τελεστές',
    'Λεξικά',
    'Συναρτήσεις'
  ],
  url: 'js-novice',
  isExercise: false,
  videoURL: '7vGEzHO6cMY',
  presentationSheetURL: 'http://web-class.gr/slides/14_javascriptbeginner.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'W3School: JavaScript Tutorial',
    url: 'http://www.w3schools.com/js/default.asp'
  }],
  deepening: []
}, {
  Id: 21,
  title: 'JQuery & Ajax',
  description: 'Η διάλεξη αφορά της βιλιοθήκες Jquery και Ajax.',
  syllabus: [],
  url: 'jquery-ajax',
  isExercise: false,
  videoURL: 'ro3NfJXgWf8',
  presentationSheetURL: 'http://web-class.gr/slides/15_jquery-ajax.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'How jQuery Works',
    url: 'http://learn.jquery.com/about-jquery/how-jquery-works/'
  }],
  deepening: []
}, {
  Id: 22,
  title: 'ΕΡΓΑΣΙΑ 6',
  description: '',
  syllabus: [],
  url: 'exercise-6',
  isExercise: true
}, {
  Id: 23,
  title: 'JAVASCRIPT EVENTS',
  description: 'Σχετικά με JavaScript Events',
  syllabus: [],
  url: 'js-events',
  isExercise: false,
  videoURL: 'vfnC33G1QZE',
  presentationSheetURL: 'http://web-class.gr/slides/16_javascriptevents.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'Introduction to Events',
    url: 'http://quirksmode.org/js/introevents.html'
  }, {
    Id: 2,
    title: 'The events',
    url: 'http://quirksmode.org/js/events_events.html'
  }],
  deepening: [{
    Id: 1,
    title: 'JavaScript: The Definitive Guide',
    url: 'https://www.amazon.com/JavaScript-Definitive-Guide-Activate-Guides/dp/0596805527'
  }]
}, {
  Id: 24,
  title: 'MOBILE',
  description: 'Η διάλεξη έγινε από τον προσκεκλημένο διδάσκοντα Ανδρέα Νομικό, Stanford MSc από την ομάδα του LinkedIn. Πρόκειται για ένα διασκεδαστικό και χρήσιμο θέμα, αλλά δεν απαιτείται για την παρακολούθηση των επόμενων, ούτε για την επίλυση ασκήσεων.',
  syllabus: [],
  url: 'mobile',
  isExercise: false,
  videoURL: 'aX81h7RWK-I',
  presentationSheetURL: 'http://web-class.gr/slides/17_mobile.pdf',
  suggestedReading: [],
  deepening: []
}, {
  Id: 25,
  title: 'DOM/BOM ΣΕ JAVASCRIPT',
  description: 'Το μοντέλο DOM στην JavaScript',
  syllabus: [],
  url: 'js-dom',
  isExercise: false,
  videoURL: 'n3tSUv93Mec',
  presentationSheetURL: 'http://web-class.gr/slides/18_javascriptdom.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'W3C DOM -Introduction',
    url: 'http://quirksmode.org/dom/intro.html'
  }],
  deepening: []
}, {
  Id: 26,
  title: 'ΘΕΜΜΑΤΑ ΑΣΦΑΛΕΙΑΣ',
  description: 'Οι πρακτικές που παρουσιάστηκαν σε αυτή τη διάλεξη είναι πλέον ξεπερασμένες και θεωρούνται λάθος. Το md5 πρέπει να αποφεύγεται και στη θέση του να χρησιμοποιείται sha256 με αλάτι.',
  syllabus: [
    'XSS',
    'Αναπαράσταση εντολών και δεδομένων',
    'Ανασφαλές ανέβασμα αρχείων',
    'Πρόσβαση σε αρχεία με include',
    'Εκτελέσιμα αρχεία .inc',
    'SQL injections',
    'md5 και ασφαλής αποθήκευση κωδικών',
    'Ωμή βία και επίθεση λεξικού',
    'Εξωτερικά προσβάσιμες υπηρεσίες',
    'Τείχη προστασίας, iptables',
    'DoS, DDoS'
  ],
  url: 'security',
  isExercise: false,
  videoURL: 'IhXkL5D1-yE',
  presentationSheetURL: 'http://web-class.gr/slides/19_security.pdf',
  suggestedReading: [],
  deepening: []
}, {
  Id: 27,
  title: 'OOP JAVASCRIPT',
  description: 'Αντικειμενοστραφείς JavaScript',
  syllabus: [],
  url: 'js-oop',
  isExercise: false,
  videoURL: 'uz2YjXPNVqs',
  presentationSheetURL: 'http://web-class.gr/slides/20_functional.pdf',
  suggestedReading: [{
    Id: 1,
    title: 'A re-introduction to JavaScript',
    url: 'https://developer.mozilla.org/en/a_re-introduction_to_javascript'
  }],
  deepening: [{
    Id: 1,
    title: 'JavaScript: The Definitive Guide',
    url: 'https://www.amazon.com/JavaScript-Definitive-Guide-Activate-Guides/dp/0596805527'
  }]
}, {
  Id: 28,
  title: 'SUBVERSION',
  description: 'Αποθήκευση αρχείου κώδικα.',
  syllabus: [
    'Η ανάγκη για version control',
    'Εκδόσεις κώδικα',
    'SVN client',
    'Check out',
    'Update',
    'Commit',
    'Conflicts',
    'Ιστορικό',
    'Ακύρωση αλλαγών',
    'Blame',
    'SVN server'
  ],
  url: 'subversion',
  isExercise: false,
  videoURL: '-HSM8t2Ue30',
  presentationSheetURL: 'http://web-class.gr/slides/21_svn.pdf',
  suggestedReading: [],
  deepening: [{
    Id: 1,
    title: 'Version Control with Subversion',
    url: 'https://www.amazon.com/Version-Control-Subversion-Michael-Pilato/dp/0596510330'
  }]
}, {
  Id: 29,
  title: 'WORKSHOP',
  description: 'Παρουσιάσαμε τη δημιουργία μίας εφαρμογής photo sharing στην αίθουσα.',
  syllabus: [],
  url: 'workshop',
  isExercise: false,
  suggestedReading: [],
  videoURL: 'ajJhYG6_snY',
  deepening: []
}, {
  Id: 30,
  title: 'ΤΕΛΙΚΕΣ ΕΡΓΑΣΙΕΣ',
  description: 'Κατά τη διάρκεια του δίωρου παρουσιάσεων, είχαμε την ευκαιρία να δούμε και να χρησιμοποιήσουμε πλήρεις web εφαρμογές δημιουργημένες από τους συναδέλφους μας που παρακολούθησαν το σεμινάριο σε ομάδες ανάπτυξης λογισμικού. Επιπλέον, εκτός από την εμπειρία χρήστη που παρουσίασε κάθε ομάδα, θίχτηκαν και ορισμένα τεχνικά θέματα που έχουν εκπαιδευτικό ενδιαφέρον για κάθε εργασία, από τους ίδιους τους δημιουργούς. Κάθε ομάδα ήταν ελεύθερη να επιλέξει το θέμα της υπηρεσίας που δημιούργησε, με αποτέλεσμα ορισμένες ιδέες να είναι αξιόλογα πρωτότυπες.\
Καθώς η τελευταία αυτή συνάντηση αποτελεί απολογισμό της δουλειάς μας, μέσα από τις παρουσιάσεις των συναδέλφων μας κρίθηκε από το κοινό αν τελικά ο στόχος μας να μεταδώσουμε την τεχνογνωσία ανάπτυξης λογισμικού που αφορά το web στην πράξη, συνδυάζοντας την επιστημονική γνώση και την πρακτική εφαρμογή της με τρόπο ο οποίος έχει άμεσα χρήσιμα αποτελέσματα καθώς και να αναδείξουμε την ομορφιά και τη δημιουργικότητα της διαδικασίας ανάπτυξης λογισμικού τελικά επετεύχθη.\
Η συγκεκριμένη συνάντηση ήταν ανοιχτή σε όλους, ανεξαρτήτως αν είχαν παρακολουθήσει το σεμινάριο ή όχι.',
  syllabus: [],
  url: 'final-presentations',
  isExercise: false,
  suggestedReading: [],
  videoURL: '14E1Fr-Hvso',
  deepening: []
}];

export default lessonValues;