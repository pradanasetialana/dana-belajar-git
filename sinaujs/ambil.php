<html>
<head>
<script type=”text/javascript“>
function addText() {
  var x = document.getElementById(“cmb”);
  var y = document.getElementById(“txt”);
  getCmb = x.value;
  y.value = getCmb;
}

</script>
</head>
<html>
<body>
<select name=”cmb” id=”cmb” onchange=”javascript: addText();”>
  <option value=”Pilihan 1″>Pilihan 1</option>
  <option value=”Pilihan 2″>Pilihan 2</option>
  <option value=”Pilihan 3″>Pilihan 3</option>
</select>

<input type=”text” name=”txt” id=”txt” size=”15″>
</body>
</html>