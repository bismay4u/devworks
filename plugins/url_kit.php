<link rel="stylesheet" href="../css/jquery/jquery.ui.smoothness.css" type="text/css" title="ui-theme">
<script type="text/javascript" src="../js/jquery.js"></script>

<style>
input[type=text],output {
	width: 300px;height:25px;
	display: inline-block;
	border: 1px solid #AAA;
	padding: 2px;
	margin: 0px;
	box-sizing: border-box;
	line-height: 22px;
	float:left;
}
input[text] {
	
}
</style>
<div class='container-fluid'>
<h3>Click the "URL Encode" button to see how the JavaScript function encodes the text.</h3>
<form name="changeform" action="">
	<input type="text" name="txt" id="txt" value="" placeholder='URL ...' size="30">
	<span style='float: left;padding: 5px;padding-left: 10px;padding-right: 10px;'>=</span>
	<output id='out1'></output>
	<input name="submit" type="button" value="URL Encode" onclick="urlencode()">
</form>
<hr/>
<h2>URL Encoding Reference</h2>
<div style='row'>
  <div class='col-md-3'>
<table class="table table-stripped table-bordered" cellpadding=2 cellspacing=0>
	<thead class='ui-widget-header'>
		<tr>
      <th>ASCII Character</th>
      <th>URL-encoding</th>
      </tr>
	</thead>
    <tbody>
		<tr>
      <td>space</td>
      <td>%20</td>
    </tr>
    <tr>
      <td>!</td>
      <td>%21</td>
    </tr>
    <tr>
      <td>"</td>
      <td>%22</td>
    </tr>
    <tr>
      <td>#</td>
      <td>%23</td>
    </tr>
    <tr>
      <td>$</td>
      <td>%24</td>
    </tr>
    <tr>
      <td>%</td>
      <td>%25</td>
    </tr>
    <tr>
      <td>&amp;</td>
      <td>%26</td>
    </tr>
    <tr>
      <td>'</td>
      <td>%27</td>
    </tr>
    <tr>
      <td>(</td>
      <td>%28</td>
    </tr>
    <tr>
      <td>)</td>
      <td>%29</td>
    </tr>
    <tr>
      <td>*</td>
      <td>%2A</td>
    </tr>
    <tr>
      <td>+</td>
      <td>%2B</td>
    </tr>
    <tr>
      <td>,</td>
      <td>%2C</td>
    </tr>
    <tr>
      <td>-</td>
      <td>%2D</td>
    </tr>
    <tr>
      <td>.</td>
      <td>%2E</td>
    </tr>
    <tr>
      <td>/</td>
      <td>%2F</td>
    </tr>
    <tr>
      <td>0</td>
      <td>%30</td>
    </tr>
    <tr>
      <td>1</td>
      <td>%31</td>
    </tr>
    <tr>
      <td>2</td>
      <td>%32</td>
    </tr>
    <tr>
      <td>3</td>
      <td>%33</td>
    </tr>
    <tr>
      <td>4</td>
      <td>%34</td>
    </tr>
    <tr>
      <td>5</td>
      <td>%35</td>
    </tr>
    <tr>
      <td>6</td>
      <td>%36</td>
    </tr>
    <tr>
      <td>7</td>
      <td>%37</td>
    </tr>
    <tr>
      <td>8</td>
      <td>%38</td>
    </tr>
    <tr>
      <td>9</td>
      <td>%39</td>
    </tr>
    <tr>
      <td>:</td>
      <td>%3A</td>
    </tr>
    <tr>
      <td>;</td>
      <td>%3B</td>
    </tr>
    <tr>
      <td>&lt;</td>
      <td>%3C</td>
    </tr>
    <tr>
      <td>=</td>
      <td>%3D</td>
    </tr>
    <tr>
      <td>&gt;</td>
      <td>%3E</td>
    </tr>
    <tr>
      <td>?</td>
      <td>%3F</td>
    </tr>
    <tr>
      <td>@</td>
      <td>%40</td>
    </tr>
    <tr>
      <td>A</td>
      <td>%41</td>
    </tr>
    <tr>
      <td>B</td>
      <td>%42</td>
    </tr>
    <tr>
      <td>C</td>
      <td>%43</td>
    </tr>
    <tr>
      <td>D</td>
      <td>%44</td>
    </tr>
    <tr>
      <td>E</td>
      <td>%45</td>
    </tr>
    <tr>
      <td>F</td>
      <td>%46</td>
    </tr>
    <tr>
      <td>G</td>
      <td>%47</td>
    </tr>
    <tr>
      <td>H</td>
      <td>%48</td>
    </tr>
    <tr>
      <td>I</td>
      <td>%49</td>
    </tr>
    <tr>
      <td>J</td>
      <td>%4A</td>
    </tr>
    <tr>
      <td>K</td>
      <td>%4B</td>
    </tr>
    <tr>
      <td>L</td>
      <td>%4C</td>
    </tr>
    <tr>
      <td>M</td>
      <td>%4D</td>
    </tr>
    <tr>
      <td>N</td>
      <td>%4E</td>
    </tr>
    <tr>
      <td>O</td>
      <td>%4F</td>
    </tr>
    <tr>
      <td>P</td>
      <td>%50</td>
    </tr>
    <tr>
      <td>Q</td>
      <td>%51</td>
    </tr>
    <tr>
      <td>R</td>
      <td>%52</td>
    </tr>
    <tr>
      <td>S</td>
      <td>%53</td>
    </tr>
    <tr>
      <td>T</td>
      <td>%54</td>
    </tr>
    <tr>
      <td>U</td>
      <td>%55</td>
    </tr>
    <tr>
      <td>V</td>
      <td>%56</td>
    </tr>
    <tr>
      <td>W</td>
      <td>%57</td>
    </tr>
    </tbody>
</table>
</div><div class='col-md-3'>
<table class="table table-stripped table-bordered" cellpadding=2 cellspacing=0>
	<thead class='ui-widget-header'>
		<tr>
      <th>ASCII Character</th>
      <th>URL-encoding</th>
      </tr>
	</thead>
        <tr>
      <td>X</td>
      <td>%58</td>
    </tr>
    <tr>
      <td>Y</td>
      <td>%59</td>
    </tr>
    <tr>
      <td>Z</td>
      <td>%5A</td>
    </tr>
    <tr>
      <td>[</td>
      <td>%5B</td>
    </tr>
    <tr>
      <td>\</td>
      <td>%5C</td>
    </tr>
    <tr>
      <td>]</td>
      <td>%5D</td>
    </tr>
    <tr>
      <td>^</td>
      <td>%5E</td>
    </tr>
    <tr>
      <td>_</td>
      <td>%5F</td>
    </tr>
    <tr>
      <td>`</td>
      <td>%60</td>
    </tr>
    <tr>
      <td>a</td>
      <td>%61</td>
    </tr>
    <tr>
      <td>b</td>
      <td>%62</td>
    </tr>
    <tr>
      <td>c</td>
      <td>%63</td>
    </tr>
    <tr>
      <td>d</td>
      <td>%64</td>
    </tr>
    <tr>
      <td>e</td>
      <td>%65</td>
    </tr>
    <tr>
      <td>f</td>
      <td>%66</td>
    </tr>
    <tr>
      <td>g</td>
      <td>%67</td>
    </tr>
    <tr>
      <td>h</td>
      <td>%68</td>
    </tr>
    <tr>
      <td>i</td>
      <td>%69</td>
    </tr>
    <tr>
      <td>j</td>
      <td>%6A</td>
    </tr>
    <tr>
      <td>k</td>
      <td>%6B</td>
    </tr>
    <tr>
      <td>l</td>
      <td>%6C</td>
    </tr>
    <tr>
      <td>m</td>
      <td>%6D</td>
    </tr>
    <tr>
      <td>n</td>
      <td>%6E</td>
    </tr>
    <tr>
      <td>o</td>
      <td>%6F</td>
    </tr>
    <tr>
      <td>p</td>
      <td>%70</td>
    </tr>
    <tr>
      <td>q</td>
      <td>%71</td>
    </tr>
    <tr>
      <td>r</td>
      <td>%72</td>
    </tr>
    <tr>
      <td>s</td>
      <td>%73</td>
    </tr>
    <tr>
      <td>t</td>
      <td>%74</td>
    </tr>
    <tr>
      <td>u</td>
      <td>%75</td>
    </tr>
    <tr>
      <td>v</td>
      <td>%76</td>
    </tr>
    <tr>
      <td>w</td>
      <td>%77</td>
    </tr>
    <tr>
      <td>x</td>
      <td>%78</td>
    </tr>
    <tr>
      <td>y</td>
      <td>%79</td>
    </tr>
    <tr>
      <td>z</td>
      <td>%7A</td>
    </tr>
    <tr>
      <td>{</td>
      <td>%7B</td>
    </tr>
    <tr>
      <td>|</td>
      <td>%7C</td>
    </tr>
    <tr>
      <td>}</td>
      <td>%7D</td>
    </tr>
    <tr>
      <td>~</td>
      <td>%7E</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>%7F</td>
    </tr>
    <tr>
      <td>`</td>
      <td>%80</td>
    </tr>
    <tr>
      <td></td>
      <td>%81</td>
    </tr>
    <tr>
      <td>‚</td>
      <td>%82</td>
    </tr>
    <tr>
      <td>ƒ</td>
      <td>%83</td>
    </tr>
    <tr>
      <td>„</td>
      <td>%84</td>
    </tr>
    <tr>
      <td>…</td>
      <td>%85</td>
    </tr>
    <tr>
      <td>†</td>
      <td>%86</td>
    </tr>
    <tr>
      <td>‡</td>
      <td>%87</td>
    </tr>
    <tr>
      <td>ˆ</td>
      <td>%88</td>
    </tr>
    <tr>
      <td>‰</td>
      <td>%89</td>
    </tr>
    <tr>
      <td>Š</td>
      <td>%8A</td>
    </tr>
    <tr>
      <td>‹</td>
      <td>%8B</td>
    </tr>
    <tr>
      <td>Œ</td>
      <td>%8C</td>
    </tr>
    <tr>
      <td></td>
      <td>%8D</td>
    </tr>
    <tr>
      <td>Ž</td>
      <td>%8E</td>
    </tr>
    <tr>
      <td></td>
      <td>%8F</td>
    </tr>
    </tbody>
</table>
</div><div class='col-md-3'>
<table class="table table-stripped table-bordered" cellpadding=2 cellspacing=0>
	<thead class='ui-widget-header'>
		<tr>
      <th>ASCII Character</th>
      <th>URL-encoding</th>
      </tr>
	</thead>
        <tr>
      <td></td>
      <td>%90</td>
    </tr>
    <tr>
      <td>‘</td>
      <td>%91</td>
    </tr>
    <tr>
      <td>’</td>
      <td>%92</td>
    </tr>
    <tr>
      <td>“</td>
      <td>%93</td>
    </tr>
    <tr>
      <td>”</td>
      <td>%94</td>
    </tr>
    <tr>
      <td>•</td>
      <td>%95</td>
    </tr>
    <tr>
      <td>–</td>
      <td>%96</td>
    </tr>
    <tr>
      <td>—</td>
      <td>%97</td>
    </tr>
    <tr>
      <td>˜</td>
      <td>%98</td>
    </tr>
    <tr>
      <td>™</td>
      <td>%99</td>
    </tr>
    <tr>
      <td>š</td>
      <td>%9A</td>
    </tr>
    <tr>
      <td>›</td>
      <td>%9B</td>
    </tr>
    <tr>
      <td>œ</td>
      <td>%9C</td>
    </tr>
    <tr>
      <td></td>
      <td>%9D</td>
    </tr>
    <tr>
      <td>ž</td>
      <td>%9E</td>
    </tr>
    <tr>
      <td>Ÿ</td>
      <td>%9F</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>%A0</td>
    </tr>
    <tr>
      <td>¡</td>
      <td>%A1</td>
    </tr>
    <tr>
      <td>¢</td>
      <td>%A2</td>
    </tr>
    <tr>
      <td>£</td>
      <td>%A3</td>
    </tr>
    <tr>
      <td>¤</td>
      <td>%A4</td>
    </tr>
    <tr>
      <td>¥</td>
      <td>%A5</td>
    </tr>
    <tr>
      <td>¦</td>
      <td>%A6</td>
    </tr>
    <tr>
      <td>§</td>
      <td>%A7</td>
    </tr>
    <tr>
      <td>¨</td>
      <td>%A8</td>
    </tr>
    <tr>
      <td>©</td>
      <td>%A9</td>
    </tr>
    <tr>
      <td>ª</td>
      <td>%AA</td>
    </tr>
    <tr>
      <td>«</td>
      <td>%AB</td>
    </tr>
    <tr>
      <td>¬</td>
      <td>%AC</td>
    </tr>
    <tr>
      <td>­</td>
      <td>%AD</td>
    </tr>
    <tr>
      <td>®</td>
      <td>%AE</td>
    </tr>
    <tr>
      <td>¯</td>
      <td>%AF</td>
    </tr>
    <tr>
      <td>°</td>
      <td>%B0</td>
    </tr>
    <tr>
      <td>±</td>
      <td>%B1</td>
    </tr>
    <tr>
      <td>²</td>
      <td>%B2</td>
    </tr>
    <tr>
      <td>³</td>
      <td>%B3</td>
    </tr>
    <tr>
      <td>´</td>
      <td>%B4</td>
    </tr>
    <tr>
      <td>µ</td>
      <td>%B5</td>
    </tr>
    <tr>
      <td>¶</td>
      <td>%B6</td>
    </tr>
    <tr>
      <td>·</td>
      <td>%B7</td>
    </tr>
    <tr>
      <td>¸</td>
      <td>%B8</td>
    </tr>
    <tr>
      <td>¹</td>
      <td>%B9</td>
    </tr>
    <tr>
      <td>º</td>
      <td>%BA</td>
    </tr>
    <tr>
      <td>»</td>
      <td>%BB</td>
    </tr>
    <tr>
      <td>¼</td>
      <td>%BC</td>
    </tr>
    <tr>
      <td>½</td>
      <td>%BD</td>
    </tr>
    <tr>
      <td>¾</td>
      <td>%BE</td>
    </tr>
    <tr>
      <td>¿</td>
      <td>%BF</td>
    </tr>
    <tr>
      <td>À</td>
      <td>%C0</td>
    </tr>
    <tr>
      <td>Á</td>
      <td>%C1</td>
    </tr>
    <tr>
      <td>Â</td>
      <td>%C2</td>
    </tr>
    <tr>
      <td>Ã</td>
      <td>%C3</td>
    </tr>
    <tr>
      <td>Ä</td>
      <td>%C4</td>
    </tr>
    <tr>
      <td>Å</td>
      <td>%C5</td>
    </tr>
    <tr>
      <td>Æ</td>
      <td>%C6</td>
    </tr>
    <tr>
      <td>Ç</td>
      <td>%C7</td>
    </tr>
    </tbody>
</table>
</div><div class='col-md-3'>
<table class="table table-stripped table-bordered" cellpadding=2 cellspacing=0>
	<thead class='ui-widget-header'>
		<tr>
      <th>ASCII Character</th>
      <th>URL-encoding</th>
      </tr>
	</thead>
        <tr>
      <td>È</td>
      <td>%C8</td>
    </tr>
    <tr>
      <td>É</td>
      <td>%C9</td>
    </tr>
    <tr>
      <td>Ê</td>
      <td>%CA</td>
    </tr>
    <tr>
      <td>Ë</td>
      <td>%CB</td>
    </tr>
    <tr>
      <td>Ì</td>
      <td>%CC</td>
    </tr>
    <tr>
      <td>Í</td>
      <td>%CD</td>
    </tr>
    <tr>
      <td>Î</td>
      <td>%CE</td>
    </tr>
    <tr>
      <td>Ï</td>
      <td>%CF</td>
    </tr>
    <tr>
      <td>Ð</td>
      <td>%D0</td>
    </tr>
    <tr>
      <td>Ñ</td>
      <td>%D1</td>
    </tr>
    <tr>
      <td>Ò</td>
      <td>%D2</td>
    </tr>
    <tr>
      <td>Ó</td>
      <td>%D3</td>
    </tr>
    <tr>
      <td>Ô</td>
      <td>%D4</td>
    </tr>
    <tr>
      <td>Õ</td>
      <td>%D5</td>
    </tr>
    <tr>
      <td>Ö</td>
      <td>%D6</td>
    </tr>
    <tr>
      <td>×</td>
      <td>%D7</td>
    </tr>
    <tr>
      <td>Ø</td>
      <td>%D8</td>
    </tr>
    <tr>
      <td>Ù</td>
      <td>%D9</td>
    </tr>
    <tr>
      <td>Ú</td>
      <td>%DA</td>
    </tr>
    <tr>
      <td>Û</td>
      <td>%DB</td>
    </tr>
    <tr>
      <td>Ü</td>
      <td>%DC</td>
    </tr>
    <tr>
      <td>Ý</td>
      <td>%DD</td>
    </tr>
    <tr>
      <td>Þ</td>
      <td>%DE</td>
    </tr>
    <tr>
      <td>ß</td>
      <td>%DF</td>
    </tr>
    <tr>
      <td>à</td>
      <td>%E0</td>
    </tr>
    <tr>
      <td>á</td>
      <td>%E1</td>
    </tr>
    <tr>
      <td>â</td>
      <td>%E2</td>
    </tr>
    <tr>
      <td>ã</td>
      <td>%E3</td>
    </tr>
    <tr>
      <td>ä</td>
      <td>%E4</td>
    </tr>
    <tr>
      <td>å</td>
      <td>%E5</td>
    </tr>
    <tr>
      <td>æ</td>
      <td>%E6</td>
    </tr>
    <tr>
      <td>ç</td>
      <td>%E7</td>
    </tr>
    <tr>
      <td>è</td>
      <td>%E8</td>
    </tr>
    <tr>
      <td>é</td>
      <td>%E9</td>
    </tr>
    <tr>
      <td>ê</td>
      <td>%EA</td>
    </tr>
    <tr>
      <td>ë</td>
      <td>%EB</td>
    </tr>
    <tr>
      <td>ì</td>
      <td>%EC</td>
    </tr>
    <tr>
      <td>í</td>
      <td>%ED</td>
    </tr>
    <tr>
      <td>î</td>
      <td>%EE</td>
    </tr>
    <tr>
      <td>ï</td>
      <td>%EF</td>
    </tr>
    <tr>
      <td>ð</td>
      <td>%F0</td>
    </tr>
    <tr>
      <td>ñ</td>
      <td>%F1</td>
    </tr>
    <tr>
      <td>ò</td>
      <td>%F2</td>
    </tr>
    <tr>
      <td>ó</td>
      <td>%F3</td>
    </tr>
    <tr>
      <td>ô</td>
      <td>%F4</td>
    </tr>
    <tr>
      <td>õ</td>
      <td>%F5</td>
    </tr>
    <tr>
      <td>ö</td>
      <td>%F6</td>
    </tr>
    <tr>
      <td>÷</td>
      <td>%F7</td>
    </tr>
    <tr>
      <td>ø</td>
      <td>%F8</td>
    </tr>
    <tr>
      <td>ù</td>
      <td>%F9</td>
    </tr>
    <tr>
      <td>ú</td>
      <td>%FA</td>
    </tr>
    <tr>
      <td>û</td>
      <td>%FB</td>
    </tr>
    <tr>
      <td>ü</td>
      <td>%FC</td>
    </tr>
    <tr>
      <td>ý</td>
      <td>%FD</td>
    </tr>
    <tr>
      <td>þ</td>
      <td>%FE</td>
    </tr>
    <tr>
      <td>ÿ</td>
      <td>%FF</td>
    </tr>
    </tbody>
</table>
</div>
<br><br>
</div>
</div>
<script>
function urlencode() {
	var txt=document.getElementById("txt").value;
	//var encodetxt=encodeURI(txt);
	var encodetxt=encodeURIComponent(txt);
	document.getElementById("out1").value=encodetxt;
} 
</script>
