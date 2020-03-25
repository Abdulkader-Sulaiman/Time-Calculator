 src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"
 
 var times = {}; // Added to initialize an object
    // Hier we need to use the array syntax to use multiple elements.
 var timepicker = new TimePicker(['time1', 'time2', 'time3'], {
   theme: 'dark',
   lang: 'en'
 });
 

 timepicker.on('change', function(evt){
    var value = (evt.hour || '00') + ':' + (evt.minute || '00');
    evt.element.value = value;
    
    //Added the below to store in the object and consoling:
    var id = evt.element.id;
    times[id] = value;
    console.clear();
    console.log(times); // Display the object
  });

