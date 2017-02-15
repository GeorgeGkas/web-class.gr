<?php
    header( 'Content-type: text/html; charset=utf8' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el"> 
    <head>
        <title>SQL γρίφος</title>
        <style type="text/css">
            html {
                background-color: #456;
            }
            body {
                font-family: "Trebuchet MS";
                background-color: white;
                width: 800px;
                margin: 10px auto;
                padding: 10px;
                
                /* να μία ενδιαφέρουσα ιδιότητα του CSS3 :) */
                border-radius: 10px;
                /* δυστυχώς δεν υποστηρίζεται ακόμη από όλους τους browsers
                   οπότε πρέπει να κάνουμε ορισμένα κόλπα για να "παίξει" */
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
            }
            h1 {
                margin: 0;
            }
            address {
                display: inline;
                border: 1px solid black;
                margin: 0;
                padding: 0;
                float: none;
            }
            .blackboard {
                text-align: center;
                position: relative;
                width: 500px;
                height: 201px;
                margin: auto;
            }
            .corner {
                position: absolute;
                z-index: 1;
                width: 1px;
                height: 1px;
                border: 1px solid white;
            }
            .tl {
                border-style: solid none none solid;
                top: 0;
                left: 0;
            }
            .tr { 
                border-style: solid solid none none;
                top: 0;
                right: 0;
            }
            .bl {
                border-style: none none solid solid;
                bottom: 0;
                left: 0;
            }
            .br { 
                border-style: none solid solid none;
                bottom: 0;
                right: 0;
            }
        </style>
    </head>
    <body>
        <h1>SQL γρίφος</h1>
        <p>Δίνεται το ακόλουθο σχήμα:</p>
        
        <h2>products</h2>
        <ul>
            <li>pid</li>
            <li>name</li>
        </ul>

        <h2>sellers</h2>
        <ul>
            <li>sid</li>
            <li>address</li>
        </ul>

        <h2>supply</h2>
        <ul>
            <li>pid</li>
            <li>sid</li>
            <li>price</li>
        </ul>
        
        <p>
            Το σχήμα περιγράφει μία βάση που καταγράφει ορισμένα <strong>προϊόντα</strong> (πίνακας <code>products</code>) και
            ορισμένους <strong>προμηθευτές</strong> (πίνακας <code>sellers</code>). Για κάθε προϊόν αποθηκεύουμε ένα <strong>όνομα</strong>
            και ένα <strong>μοναδικό αναγνωριστικό</strong>, ενώ για κάθε προμηθευτή αποθηκεύουμε μία <strong>διεύθυνση</strong> και ένα <strong>μοναδικό
            αναγνωριστικό</strong>. Ο πίνακας <code>supply</code> παρέχει πληροφορίες για την <strong>τιμή</strong> στην οποία διαθέτει
            κάθε προϊόν ο κάθε προμηθευτής.
        </p>
        <p>
            Να γραφεί <em>ένα</em> ερώτημα που να παράγει άμεσα (δηλαδή χωρίς μετέπειτα επεξεργασία μέσω PHP) 
            μία λίστα από όλα τα προϊόντα (το όνομά τους) μαζί με την διεύθυνση όπου μπορούμε να τα προμηθευτούμε στην <strong>φθηνότερη</strong> 
            τιμή (χωρίς να χρησιμοποιηθούν υποερωτήματα).
        </p>
        <p class="blackboard">
            <span>
                <span class='tl corner'></span><!-- dirty trick ;) -->
                <span class='tr corner'></span>
                <span class='bl corner'></span>
                <span class='br corner'></span>
                
                <img src="blackboard.jpg" alt="Blackboard" />
            </span>
        </p>
        <p>
            Αν νομίζεις ότι βρήκες την απάντηση, μην κάνεις spoiler στο forum καθώς μπορεί και άλλοι
            να θέλουν να το λύσουν μόνοι τους.
            
            Αντ' αυτού, επικοινώνησε μαζί μας στο <code>web-seminar@softlab.ntua.gr</code>.
            
            Μπορείς να λύσεις το γρίφο οποιαδήποτε στιγμή
            μέχρι τις διακοπές των Χριστουγέννων, και οι συνεργασίες, ως συνήθως, ενθαρρύνονται.
            Ο γρίφος είναι μία αρκετά δύσκολη άσκηση και είναι εντελώς προαιρετικός.
        </p>
        <p>
            Οι εξής συνάδελφοι έχουν λύσει τον γρίφο επιτυχώς μέχρι στιγμής:
        </p>
        <ol>
            <li>Νικόλας Κορασίδης</li>
            <li>Μάκης Αρσένης</li>
            <li>Σωκράτης Βίδρος</li>
            <li>Πάρις Κασιδιάρης</li>
            <li>Ηλίας Κανέλλος</li>
            <li>Αλέξανδρος Γιδαράκος</li>
        </ol>
    </body>
</html>