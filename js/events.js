window.onload = function eventShowcase() {
  document.getElementById('events').innerHTML =
    "<div class='event-card'><p>Hello</p></div>";
};

fetch('../json/events.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var _data = data.events;
    for (var i = 0; i < _data.length; i++) {
      console.log(_data[i].name);
    }
  });
