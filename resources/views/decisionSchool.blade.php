@extends("layouts/decision")


@section("graph")


    <body style="margin-top: 10%">
    <div style="display: inline-block; margin: 10px">
    <h4>School</h4>
    <select style="float: left; border: 1px; border-color: #0b0b0b">
        <option>Borlänge</option>
    </select>
    </div>
    <div style="display: inline-block; margin: 10px">
    <h4>Variable</h4>
    <div id="drop" style="float: left"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.js" charset="utf-8"></script>
    <script>
		var margin = {top: 80, right: 180, bottom: 100, left: 180},
			width = 960 - margin.left - margin.right,
			height = 500 - margin.top - margin.bottom;

		var svg = d3.select("body").append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// gridlines in y axis function
		function make_y_gridlines() {
			return d3.axisLeft(y)
				.ticks(5)
		}

		var data = [
			{Strategy: "Att ge kamratrespons", Like: 611, Dislike: 561, Unused: 357, Number_users: 1529, Rating: 0.52, Not_used: 0.23},
			{Strategy: "Gör uppgiften till din", Like: 542, Dislike: 430, Unused: 515, Number_users: 1487, Rating: 0.56, Not_used: 0.35},
			{Strategy: "Reflektera över matematiska lösningar", Like: 638, Dislike: 293, Unused: 358, Number_users: 1289, Rating: 0.69, Not_used: 0.28},
			{Strategy: "Självobservation", Like: 761, Dislike: 383, Unused: 695, Number_users: 1839, Rating: 0.67, Not_used: 0.38}
		]
		data.columns = ["Strategy", "Like", "Dislike", "Unused", "Number_users", "Rating", "Not_used"]
		console.log(data)
		var elements = Object.keys(data[0])
			.filter(function(d){
				return ((d != "Strategy"));
			});
		var selection = elements[0];

		var y = d3.scaleLinear()
			.domain([0, d3.max(data, function(d){
				return +d[selection];
			})])
			.range([height, 0]);


		var x = d3.scaleBand()
			.domain(data.map(function(d){ return d.Strategy;}))
			.rangeRound([0, width]);


		var xAxis = d3.axisBottom()
			.scale(x)

		var yAxis = d3.axisLeft()
			.scale(y)
		svg.append("text")
			.attr("x", (width / 2))
			.attr("y", 0 - (margin.top / 2))
			.attr("text-anchor", "middle")
			.style("font-size", "16px")
			.style("text-decoration", "underline")
			.text("Statistics For Chosen School");

		svg.append("g")
			.attr("class", "x axis")
			.attr("transform", "translate(0," + height + ")")
			.call(xAxis)
			.selectAll("text")
			.style("font-size", "12px")
			.style("text-anchor", "end")
			.attr("dx", "-.8em")
			.attr("dy", "-.55em")
			.attr("transform", "rotate(-45)" );

		svg.append("g")
			.attr("class", "y axis")
			.call(yAxis);

		// add the Y gridlines
		svg.append("g")
			.attr("class", "grid")
			.call(make_y_gridlines()
				.tickSize(-width)
				.tickFormat("")
			)

		svg.selectAll("rectangle")
			.data(data)
			.enter()
			.append("rect")
			.attr("class","rectangle")
			.attr("width", 100)
			.attr("height", function(d){
				return height - y(+d[selection]);
			})
			.attr("x", function(d, i){
				return (width / data.length) * i +25;
			})
			.attr("y", function(d){
				return y(+d[selection]);
			})
			.append("title")
			.text(function(d){
				return d.Strategy + " : " + d[selection];
			});

		var selector = d3.select("#drop")
			.append("select")
			.attr("id","dropdown")
			.on("change", function(d){
				selection = document.getElementById("dropdown");

				y.domain([0, d3.max(data, function(d){
					return +d[selection.value];})]);

				yAxis.scale(y);

				d3.selectAll(".rectangle")
					.transition()
					.attr("height", function(d){
						return height - y(+d[selection.value]);
					})
					.attr("x", function(d, i){
						return (width / data.length) * i +25;
					})
					.attr("y", function(d){
						return y(+d[selection.value]);
					})
					.ease(d3.easeLinear)
					.select("title")
					.text(function(d){
						return d.Strategy + " : " + d[selection.value];
					});

				d3.selectAll("g.y.axis")
					.transition()
					.call(yAxis);

			});

		selector.selectAll("option")
			.data(elements)
			.enter().append("option")
			.attr("value", function(d){
				return d;
			})
			.text(function(d){
				return d;
			})


    </script>
    </body>

@endsection
