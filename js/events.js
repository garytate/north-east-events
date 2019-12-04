window.onload = function eventShowcase() {
  fetch('../json/events.json')
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      var eventText = '';
      var _data = data.events;
      for (var i = 0; i < _data.length; i++) {
        console.log(_data[i].name);
        var eventText = eventText.concat(
          `<div class="event-card"><h1>${_data[i].name}</h1><p>${_data[i].desc}</p>`
        );
      }
      console.log(eventText);
      document.getElementById('events').innerHTML = eventText;
    });
};
