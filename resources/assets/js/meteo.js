(function() {

	let meteoApp = {

	 	init: function() {
	 		console.log("hehehe");
	 		this.getWeather();
	 	},

	 	getWeather: function() {
	 		let city = $("#city").text();
	 		let url = "http://www.prevision-meteo.ch/services/json/" + city;
	        $.get(url)
	        .done(function(response) {
	            meteoApp.showCurrentData(response.current_condition);
	            meteoApp.showNextDaysData(response.fcst_day_1, "day1");
	            meteoApp.showNextDaysData(response.fcst_day_2, "day2");
	            meteoApp.showNextDaysData(response.fcst_day_3, "day3");
	        })
	 	},

	 	showCurrentData: function(data) {
	 		$("#meteo_icon").attr("src", data.icon_big);
	 		$("#condition").text(data.condition);
	 		$("#temperature").text(data.tmp + "°");
	 		$("#vent").text("Vent : " + data.wnd_dir + " à " + data.wnd_spd + " km/h");
	 		console.log(data);
	 	},

	 	showNextDaysData: function(data, day) {
	 		console.log(day);
	 		console.log(data);
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