<button onclick="trackButtonClick()">Donate</button>

<script>
function trackButtonClick() {
  gtag('event', 'donate_button_click', {
    'event_category': 'donation',
    'event_label': 'PayPal donation button'
  });
}
</script>