# JSON to XML as a web service

### Goal
The main goal of this code is:

Having a URL (*main-URL*) that returns a JSON, I want to call another URL, pass the *main-url* as a GET parameter and obtain a XML response (instead of the JSON).

### System requirements
- **Web Server**: I used Apache v2.2.
- **PHP**: I used PHP v5.6.

### How to run it

1. Create a directory (for example called `/json2xml`) in the root of the web server.
2. Copy the files: `array2xml.php` and `index.php`
3. Run the Apache (or web server that you use).
4. Call the web service. You can test it on a web browser:
5. Enter the URL to the service: `http://<IP>:<PORT>/json2xml/?=URL-WITH-THE-JSON-RESPONSE`
6. Example: `http://localhost:8090/json2xml/?=https://data.nasa.gov/resource/y77d-th95.json`

### Test

#### Input
Jaguar dataset [URL link](http://www.carqueryapi.com/api/0.3/?callback=?&cmd=getModels&make=Jaguar).

```
?({"Models":[{"model_name":"220","model_make_id":"jaguar"},{"model_name":"240","model_make_id":"jaguar"},{"model_name":"3.8","model_make_id":"jaguar"},{"model_name":"420G","model_make_id":"jaguar"},{"model_name":"C-Type","model_make_id":"jaguar"},{"model_name":"Concept Eight","model_make_id":"jaguar"},{"model_name":"E Type","model_make_id":"jaguar"},{"model_name":"E-Type","model_make_id":"jaguar"},{"model_name":"F-Type","model_make_id":"jaguar"},{"model_name":"Kensington","model_make_id":"jaguar"},{"model_name":"Mark IV","model_make_id":"jaguar"},{"model_name":"MK 10","model_make_id":"jaguar"},{"model_name":"MK II","model_make_id":"jaguar"},{"model_name":"MK IV","model_make_id":"jaguar"},{"model_name":"MK IX","model_make_id":"jaguar"},{"model_name":"MK V","model_make_id":"jaguar"},{"model_name":"MK VII","model_make_id":"jaguar"},{"model_name":"MK VIII","model_make_id":"jaguar"},{"model_name":"MK X","model_make_id":"jaguar"},{"model_name":"R Coupe","model_make_id":"jaguar"},{"model_name":"R-D6","model_make_id":"jaguar"},{"model_name":"S-Type","model_make_id":"jaguar"},{"model_name":"Sovereign","model_make_id":"jaguar"},{"model_name":"SS","model_make_id":"jaguar"},{"model_name":"Type E","model_make_id":"jaguar"},{"model_name":"Type S","model_make_id":"jaguar"},{"model_name":"Type-C","model_make_id":"jaguar"},{"model_name":"Vanden Plas","model_make_id":"jaguar"},{"model_name":"X-300","model_make_id":"jaguar"},{"model_name":"X-Type","model_make_id":"jaguar"},{"model_name":"X400","model_make_id":"jaguar"},{"model_name":"XF","model_make_id":"jaguar"},{"model_name":"XJ","model_make_id":"jaguar"},{"model_name":"XJ-13","model_make_id":"jaguar"},{"model_name":"XJ220","model_make_id":"jaguar"},{"model_name":"XJ6","model_make_id":"jaguar"},{"model_name":"XJ8","model_make_id":"jaguar"},{"model_name":"XJR","model_make_id":"jaguar"},{"model_name":"XJR-11","model_make_id":"jaguar"},{"model_name":"XJR-15","model_make_id":"jaguar"},{"model_name":"XJS","model_make_id":"jaguar"},{"model_name":"XK","model_make_id":"jaguar"},{"model_name":"XK8","model_make_id":"jaguar"},{"model_name":"XKA","model_make_id":"jaguar"},{"model_name":"XKR","model_make_id":"jaguar"},{"model_name":"XS","model_make_id":"Jaguar"}]});
```


#### Output
```
<?xml version="1.0" encoding="UTF-8" ?>
<root>
  <Models>
    <model_name>220</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>240</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>3.8</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>420G</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>C-Type</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>Concept Eight</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>E Type</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>E-Type</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>F-Type</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>Kensington</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>Mark IV</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>MK 10</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>MK II</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>MK IV</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>MK IX</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>MK V</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>MK VII</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>MK VIII</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>MK X</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>R Coupe</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>R-D6</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>S-Type</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>Sovereign</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>SS</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>Type E</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>Type S</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>Type-C</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>Vanden Plas</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>X-300</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>X-Type</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>X400</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XF</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJ</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJ-13</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJ220</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJ6</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJ8</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJR</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJR-11</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJR-15</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XJS</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XK</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XK8</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XKA</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XKR</model_name>
    <model_make_id>jaguar</model_make_id>
  </Models>
  <Models>
    <model_name>XS</model_name>
    <model_make_id>Jaguar</model_make_id>
  </Models>
</root>

```


### Credits
The PHP code of the converter has been created by **Lalit Patel**. The source has been copied from this [gist](https://gist.github.com/bzerangue/4982951#file-array2xml-php-L7).


