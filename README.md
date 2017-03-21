# JSON to XML as a web service

### Goal
The main goal of this code is:

Having a URL (*main-URL*) that returns a JSON, I want to call another URL (*local-URL*), pass the *main-url* as a GET parameter and obtain a XML response (instead of the JSON).

In other words, convert a call to a website that returns a **JSON** to a **XML** response.

### System requirements
- **Web Server**: I used Apache Web Server v2.2.
- **PHP**: I used PHP v5.6.

### Steps to run it

1. Create a directory (for example called `/json2xml`) in the root of the web server.
2. Copy the files: `array2xml.php` and `index.php`
3. Run the Apache (or web server that you use).
4. Call the web service. You can test it on a web browser.
5. Enter the URL to the service: `http://<IP>:<PORT>/json2xml/?=URL-WITH-THE-JSON-RESPONSE`
6. Example: `http://localhost:8090/json2xml/?=https://data.nasa.gov/resource/y77d-th95.json`
7. It returns a web page with the XML.

### Test

#### Input
Jaguar dataset [URL link](http://www.carqueryapi.com/api/0.3/?callback=?&cmd=getModels&make=Jaguar).

```
({"Models":
	[{"model_name":"220","model_make_id":"jaguar"},
	{"model_name":"240","model_make_id":"jaguar"},
	{"model_name":"3.8","model_make_id":"jaguar"},
	{"model_name":"420G","model_make_id":"jaguar"},
	{"model_name":"C-Type","model_make_id":"jaguar"},
	{"model_name":"Concept Eight","model_make_id":"jaguar"},
	{"model_name":"E Type","model_make_id":"jaguar"},
	{"model_name":"E-Type","model_make_id":"jaguar"},
	{"model_name":"F-Type","model_make_id":"jaguar"},
	{"model_name":"Kensington","model_make_id":"jaguar"}
	]});
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
</root>

```


### Credits
The PHP code of the converter has been created by **Lalit Patel**. The source code has been copied from this [gist](https://gist.github.com/bzerangue/4982951#file-array2xml-php-L7).


