IDIOT SEND MESSAGE
==================
I use this to dens message to a speaker subtly. I just put a gadget and open client.php there and control the message from other device using operator.php.

It works very idiotically, client.php just load text.php every second, and oeprator.php just manipulate its content. As easy as that.

You could use all kind of content, even send javascript code.

Some useful message to send
---------------------------

# sending alert
```html
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

<script>
a+=1;
$('#baaa').text(a.toString().substring(0,5));
</script>
<span id="baaa"></span> detik
```