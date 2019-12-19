window.onload = function eventShowcase() {
  fetch('../json/events.json')
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      var eventText = '';
      var _data = data.events;
      for (var i = 0; i < _data.length; i++) {
        var eventText = eventText.concat(
          `<div class="event-card">
            <img src=${_data[i].image}>
            <h1>${_data[i].name}</h1>
            <p id="card-description">${_data[i].desc}</p>
            <p id="card-price">${_data[i].price}</p>
            <button type="submit" class="order-button">BUY NOW</button>
          </div>`
        );
      }
      document.getElementById('events').innerHTML = eventText;
    });
};
