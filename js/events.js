window.onload = function eventShowcase() {
  console.log('Hello World');
  document.getElementById('events').innerHTML =
    "<div class='event-card'><p>Hello</p></div>";
};

fetch('../json/events.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    for (const event in data) {
      console.log(data[event]);
    }
  });
