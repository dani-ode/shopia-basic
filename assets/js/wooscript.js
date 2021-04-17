//share native
const shareButton = document.querySelector('.show-share-modal');
const overlay = document.querySelector('.share-overlay');
const shareModal = document.querySelector('.share-modal');

const title = window.document.title;
const url = window.document.location.href;

if(shareButton){
    shareButton.addEventListener('click', () => {
        if(navigator.share){
            navigator.share({
                title: `${title}`,
                url: `${url}`
            }) .then (() => {
                console.log('Thanks for sharing!');
            })
            .catch(console.error);
        } else {
            overlay.classList.add('show-share');
            shareModal.classList.add('show-share');
        }

    })
}


//countdown timer
// Set the date we're counting down to
var countDownDate = new Date("may 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"

    getMytime = document.getElementById("mytimer");
    if(getMytime){
    getMytime.innerHTML = `
        <div class="cont-countdown-timer container text-center">
            <div class="row">
                <div class="col">
                    <p class="mytimer bg-white text-black-imp border"> `+ days +` </p>
                </div>
                <div class="col">
                    <p class="mytimer bg-white text-black-imp border"> `+ hours +` </p>
                </div>
                <div class="col">
                    <p class="mytimer bg-white text-black-imp border"> `+ minutes +` </p>
                </div>
                <div class="col">
                    <p class="mytimer bg-white text-black-imp border"> `+ seconds +` </p>
                </div>
            </div>
        </div>
        `;
    }

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);