(function() {

	let meteoApp = {

	 	init: function() {
	 		this.getWeather();
	 	},

	 	getWeather: function() {
	 		let city = $("#city").text();
	 		let url = "http://www.prevision-meteo.ch/services/json/" + city;
	        $.get(url)
	        .done(function(response) {
	            meteoApp.showNextDaysData(response.fcst_day_0, "day0");
	            meteoApp.showNextDaysData(response.fcst_day_1, "day1");
	            meteoApp.showNextDaysData(response.fcst_day_2, "day2");
	            meteoApp.showNextDaysData(response.fcst_day_3, "day3");
	        })
	 	},

	 	showNextDaysData: function(data, day) {
	 		$("#" + day + "_icon").attr("src", data.icon_big);
	 		$("#" + day + "_date").text(data.date);
	 		$("#" + day + "_condition").text(data.condition);
	 		$("#" + day + "_tmax").text("max : " + data.tmax + "°");
	 		$("#" + day + "_tmin").text("min : " + data.tmin + "°");
	 	}
	}

	meteoApp.init();

})();


// Lien pour credits : www.prevision-meteo.ch
