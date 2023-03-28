setInterval(() => {

          fetch("https://electronworks.000webhostapp.com/api/read.php")
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      document.getElementById("hum").innerHTML = data.hum;
      document.getElementById("temp").innerHTML = data.temp;
      document.getElementById("air").innerHTML = data.air;
    })
    .catch((err) => {
      console.error(err);
    });

     
}, 500);


