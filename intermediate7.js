var x = [3,6,1,88,34];
var counter = 0;
var min = x[counter];
var i;
var place;
while (counter < (x.length - 1)) {
	i = counter
	min = x[counter];
	while (i < x.length) {
		
		if (x[i] < min) {
			min = x[i];
			place = i;
		}
		i++;
	}
	
	x[place] = x[counter];
	x[counter] = min;

	console.log(min);
	
	counter++;
}

console.log(x);