IDIOT SEND MESSAGE
==================
I use this to dens message to a speaker subtly. I just put a gadget and open client.php there and control the message from other device using operator.php.

It works very idiotically, client.php just load text.php every second, and oeprator.php just manipulate its content. As easy as that.

You could use all kind of content, even send javascript code.

Some useful message to send
---------------------------

# sending alert
```html
<br/>
<span style="background-color:red;">WAKTU HABIS</span>
```

# reloading page
```html
<script> location.reload(); </script>
```

# setting counter, send the first code, then after sent send the second

```html
<script>
var a=1;
</script>
persiapan
```

```html
<script>
a+=1;
$('#baaa').text(a.toString().substring(0,5));
</script>
<span id="baaa"></span> detik
//-------------
<script>
a+=1;
$('#baaa').text(Math.ceil(a/60).toString().substring(0,5)+ ' Menit ' + Math.ceil(a%60).toString().substring(0,5) + ' Detik');
</script>
<span id="baaa"></span> 
```

# display clock
```html
<br/>
<script type="text/javascript">
<!--
```

```html
function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").innerHTML = currentTimeString;
  // console.log(currentTimeString);
}
updateClock();
// -->
</script>
<div id="clock"></div>

```

# display countdown
```html
<script>
// init first
var distance = 15*60;
</script>
preparing countdown
```

```html
<script type="text/javascript">

function updateCountDown() {

  distance--;

  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor(distance / 60 );
  var seconds = Math.floor(distance % 60);

  // Display the result in the element with id="demo"
  var txt = minutes + "m " + seconds + "s ";
  // console.log(txt);
  document.getElementById("countdown").innerHTML = txt;

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "TIME'S UP";
  }
}
updateCountDown();
</script>
Time left : <span id="countdown"></span>
```
