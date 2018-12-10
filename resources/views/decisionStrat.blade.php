@extends("layouts/decision")

@section("graph")
    <div style="display: inline-block; margin: 10px">
<h4>Strategy</h4>
<select style="float: left">
    <option>Att ge kamratrepsons</option>
    <option>Baklängesplanering</option>
    <option>Belöningar</option>
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

	function make_y_gridlines() {
		return d3.axisLeft(y)
			.ticks(height/20)
	}

	var data = [
		{Name: "Borlänge", Like: 611, Dislike: 561, Unused: 357, Number_users: 1529, Rating: 0.52, Not_used: 0.23},
		{Name: "Borås", Like: 390, Dislike: 542, Unused: 356, Number_users: 1288, Rating: 0.42, Not_used: 0.28},
		{Name: "Enköping", Like: 802, Dislike: 184, Unused: 352, Number_users: 1338, Rating: 0.81, Not_used: 0.26},
		{Name: "Enskede", Like: 353, Dislike: 443, Unused: 373, Number_users: 1169, Rating: 0.44, Not_used: 0.32},
		{Name: "Fruängen", Like: 210, Dislike: 497, Unused: 485, Number_users: 1192, Rating: 0.30, Not_used: 0.41},
		{Name: "Gävle", Like: 91, Dislike: 272, Unused: 647, Number_users: 1010, Rating: 0.25, Not_used: 0.64},
		{Name: "Helsingborg", Like: 94, Dislike: 457, Unused: 378, Number_users: 929, Rating: 0.17, Not_used: 0.41},
		{Name: "Jönköping", Like: 362, Dislike: 219, Unused: 492, Number_users: 1073, Rating: 0.62, Not_used: 0.46},
		{Name: "Katrineholm", Like: 521, Dislike: 539, Unused: 416, Number_users: 1476, Rating: 0.49, Not_used: 0.28},
		{Name: "Krokslätt", Like: 577, Dislike: 270, Unused: 719, Number_users: 1566, Rating: 0.68, Not_used: 0.46},
		{Name: "Landskrona", Like: 652, Dislike: 501, Unused: 591, Number_users: 1744, Rating: 0.57, Not_used: 0.34},
		{Name: "Linköping", Like: 475, Dislike: 512, Unused: 480, Number_users: 1467, Rating: 0.48, Not_used: 0.33},
		{Name: "Lund", Like: 345, Dislike: 615, Unused: 398, Number_users: 1358, Rating: 0.36, Not_used: 0.29},
		{Name: "Nacka", Like: 388, Dislike: 389, Unused: 417, Number_users: 1194, Rating: 0.50, Not_used: 0.35},
		{Name: "Norrköping", Like: 436, Dislike: 234, Unused: 681, Number_users: 1351, Rating: 0.65, Not_used: 0.50},
		{Name: "Nyköping", Like: 545, Dislike: 419, Unused: 373, Number_users: 1337, Rating: 0.57, Not_used: 0.28},
		{Name: "Saltsjöbaden", Like: 439, Dislike: 421, Unused: 471, Number_users: 1331, Rating: 0.51, Not_used: 0.35},
		{Name: "Spånga", Like: 792, Dislike: 598, Unused: 631, Number_users: 2021, Rating: 0.57, Not_used: 0.31},
		{Name: "Trelleborg", Like: 637, Dislike: 81, Unused: 577, Number_users: 1295, Rating: 0.89, Not_used: 0.45},
		{Name: "Tumba", Like: 235, Dislike: 204, Unused: 448, Number_users: 887, Rating: 0.54, Not_used: 0.51},
		{Name: "Tyresö", Like: 257, Dislike: 75, Unused: 450, Number_users: 782, Rating: 0.77, Not_used: 0.58},
		{Name: "Täby", Like: 834, Dislike: 287, Unused: 369, Number_users: 1490, Rating: 0.74, Not_used: 0.25},
		{Name: "Uppsala", Like: 547, Dislike: 503, Unused: 555, Number_users: 1605, Rating: 0.52, Not_used: 0.35},
		{Name: "Uppsala Norra", Like: 130, Dislike: 643, Unused: 459, Number_users: 1232, Rating: 0.17, Not_used: 0.37},
		{Name: "Varberg", Like: 848, Dislike: 286, Unused: 369, Number_users: 1503, Rating: 0.75, Not_used: 0.25},
		{Name: "Västerås", Like: 264, Dislike: 199, Unused: 652, Number_users: 1115, Rating: 0.57, Not_used: 0.58},
		{Name: "Ystad", Like: 734, Dislike: 565, Unused: 467, Number_users: 1766, Rating: 0.57, Not_used: 0.26},
		{Name: "Örebro", Like: 297, Dislike: 484, Unused: 631, Number_users: 1412, Rating: 0.38, Not_used: 0.45},
		{Name: "Resursskolan", Like: 726, Dislike: 286, Unused: 471, Number_users: 1483, Rating: 0.72, Not_used: 0.32},
	]
	data.columns = ["Name", "Like", "Number_users", "Dislike", "Unused", "Rating"]
	console.log(data)
	var elements = Object.keys(data[0])
		.filter(function(d){
			return ((d != "Name"));
		});
	var selection = elements[0];

	var y = d3.scaleLinear()
		.domain([0, d3.max(data, function(d){
			return +d[selection];
		})])
		.range([height, 0]);


	var x = d3.scaleBand()
		.domain(data.map(function(d){ return d.Name;}))
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
		.text("Statistics For Chosen Strategy");

	svg.append("g")
		.attr("class", "x axis")
		.attr("transform", "translate(0," + height + ")")
		.call(xAxis)
		.selectAll("text")
		.style("font-size", "12px")
		.style("text-anchor", "end")
		.attr("dx", "-.8em")
		.attr("dy", "-.55em")
		.attr("transform", "rotate(-90)" );

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
		.attr("width", width/(data.length+3))
		.attr("height", function(d){
			return height - y(+d[selection]);
		})
		.attr("x", function(d, i){
			return (width / data.length) * i ;
		})
		.attr("y", function(d){
			return y(+d[selection]);
		})
		.append("title")
		.text(function(d){
			return d.Name + " : " + d[selection];
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
					return (width / data.length) * i ;
				})
				.attr("y", function(d){
					return y(+d[selection.value]);
				})
				.ease(d3.easeLinear)
				.select("title")
				.text(function(d){
					return d.Name + " : " + d[selection.value];
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


@endsection
