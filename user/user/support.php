<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <style>


.supp-header {
  position: relative;
  height: 24px;
  left: 200px;
  font-family: "Moon 2.0";
  font-style: normal;
  font-weight: 700;
  color: #226acc;
  line-height: 24px;
}

.supp-subhead {
  position: relative;
  /* margin-top: 120px; */
  left: 200px;
  color: #FDC474;
  font-family: "Red Hat Display";
  font-size: 20px;
  width: 650px;
}

div + div {
  clear: both;
}

p {
  line-height: 1.4em;
  color: #1b1b1b;
}

.faq-title {
  color: #1b1b1b;
  font-size: 2em;
  margin: 0.4em 0;
}

div.seperator {
  width: 7.5em;
  background-color: #FDC474;
  height: 0.17em;
  margin-left: -1.8em;
}

.faq-list > div {
  border-bottom: 0.07em solid #FDC474;
  padding: 1.5em 0em;
}

.faq-list > div:last-child {
  border: unset;
}

details > summary {
  list-style: none;
}
details > summary::-webkit-details-marker {
  display: none;
}

summary {
  font-size: 1.4em;
  font-weight: bold;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  transition: all 0.3s ease;
}

summary:hover {
  color: #FDC474;
}

details[open] summary ~ * {
  animation: sweep 0.5s ease-in-out;
}

@keyframes sweep {
  0% {
    opacity: 0;
    margin-left: -10px;
  }
  100% {
    opacity: 1;
    margin-left: 55px;
  }
}

details[open] summary {
  color: #FDC474;
}

details[open] p {
  border-left: 3px solid #FDC474;
  margin-left: 55px;
  padding-left: 25px;
  opacity: 100;
  transition: all 3s ease;
}

details[open] summary:after {
  content: "-";
  font-size: 3.2em;
  margin: -33px 0.35em 0 0;
  font-weight: 200;
}
.groundColor{
  background-color:#ffff;
}

.faq-body {
  display: flex;
  flex-direction: row;
  width: 30% 70%;
  /* margin: 4em auto; */
  border-radius: 0.5em;
  padding: 3em;
  /* background-color: #e5eafc; */
  margin-bottom: 125px;
}

.faq-list {
  width: 55em;
  margin: 1em auto;
  padding: 2em 0;
}

summary::-webkit-details-marker {
  display: none;
}

summary:after {
  background: transparent;
  border-radius: 0.3em;
  content: "+";
  color: #1b1b1b;
  float: right;
  font-size: 1.8em;
  font-weight: bold;
  margin: -0.3em 0.65em 0 0;
  padding: 0;
  text-align: center;
  width: 25px;
}

   </style>


</head>

<body>
<div class="col-lg-12">

        <!-- <h1 class="supp-header">SUPPORT</h1>
        <h5 class="supp-subhead">How can we help you?</h5> -->

        <div id="faq" class="card card-outline card-primary">
            <div class="card-header">
              
                <h3 class="card-title ">Frequently Asked Questions</h3>
            </div>
            
            <div class="card-body">
                <div class="faq-list">
                <div>
                    <details >
                        <summary title="How do I book a reservation?">How do I book a reservation?</summary>
                        <p class="faq-content">Step 1: Go to the home page. <br>
                            Step 2: Click Book Now and Register(If you Dont have an account).<br>
                            Step 3: Back to LogIn page and signin the newly registered account.<br>
                            Step 4: Go to Add Booking.<br>Step 5: Click Create New for new set of bookings and save it.<br>Step 6: Wait for Approval of the Admin.
                        </p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="How Far in Advance should I make a booking?">How Far in Advance should I make a booking?</summary>
                        <p class="faq-content">Step 1: Sign In your account.
                           <br>
                           Step 2: Go to Add Booking.
                           <br>
                           Step 3: Click Create New for new set of bookings.<br>
                            Step 4: Lastly, click “save” to update the event.
                            <br>
                            Step 4: Click Save to update the event.
                        </p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="Can I modify or cancel my booking after it has been made?">Can I modify or cancel my booking after it has been made?</summary>
                        <p class="faq-content">Step 1: Go to the Add Booking. 
                          <br>
                          Step 2: Click the “Action” button if you want to delete to create new bookings.
                          <br>
                          Step 3: Lastly, click “save” to update the event.
                        </p>
                    </details>
                </div>
                <div>
                    <details>
                        <summary title="What is the cancellation policy?">What is the cancellation policy?</summary>
                        <p class="faq-content">Step 1: Contact the Admin of the DeskHub System.
                          <br>
                          Step 2: Tell them to cancel your bookings. <br>
                          Step 3: Wait for cancel until your booking was removed.
                        </p>
                    </details>
                </div>
              
                <div>
                    <details>
                        <summary title="Can I delete scheduled desk booking?">Can I delete scheduled desk booking?</summary>
                        <p class="faq-content"> <br>
                        Step 1: Got to Add Booking. <br> 
                        Step 2: Click Action Button.
                        <br>
                        Step 3: Click Delete.
                        <br>
                        Step 4: Last save the event.
                        </p>
                    </details>
                </div>
            </div>
            </div>
            
        </div>
    </div>
    <!-- </div> -->
 
</body>

</html>