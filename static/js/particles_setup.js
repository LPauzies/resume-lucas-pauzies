/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'static/json/particles.json', function() {
  console.log('callback - particles.js config loaded');
});

particlesJS.load('bubbles-js', 'static/json/bubbles.json', function() {
  console.log('callback - bubbles.js config loaded');
});

particlesJS.load('stars-js', 'static/json/stars.json', function() {
  console.log('callback - stars.js config loaded');
});
