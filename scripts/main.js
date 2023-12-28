// Add your javascript here
// Don't forget to add it into respective layouts where this js file is needed

$(document).ready(function () {
  AOS.init({
    // uncomment below for on-scroll animations to played only once
    // once: true
  }); // initialize animate on scroll library
});

// Smooth scroll for links with hashes
$("a.smooth-scroll").click(function (event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $("html, body").animate(
        {
          scrollTop: target.offset().top,
        },
        1000,
        function () {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            // Checking if the target was focused
            return false;
          } else {
            $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          }
        }
      );
    }
  }
});

/* Countdown */
document.addEventListener("DOMContentLoaded", () => {
  // Tanggal dan waktu target: 14 Februari 2024 pukul 08.00 WIB
  var targetDate = new Date("2024-02-14T08:00:00+07:00");

  // Unix timestamp (in seconds) untuk tanggal dan waktu target
  var timestampTargetDate = Math.floor(targetDate.getTime() / 1000);

  // Set up FlipDown
  var flipdown = new FlipDown(timestampTargetDate)

    // Start the countdown
    .start()

    // Do something when the countdown ends
    .ifEnded(() => {
      console.log("The countdown has ended!");
    });

  // Show version number
  var ver = document.getElementById("ver");
  ver.innerHTML = flipdown.version;
});

// Audio
function toggleAudio() {
  var audio = document.getElementById('myAudio');
  var button = document.querySelector('.play-pause-button');
  if (audio.paused) {
      audio.play();
      button.classList.add('playing');
  } else {
      audio.pause();
      button.classList.remove('playing');
  }
}
