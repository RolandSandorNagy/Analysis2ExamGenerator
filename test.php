<?php  

$num = array();

for($i = 0; $i < 10; $i++) {
	$num[$i] = rand(1,200);
}

for($i = 0; $i < 10; $i++) {
	echo $num[$i].' ';
}

sort($num);
echo '<br>';

for($i = 0; $i < 10; $i++) {
	echo $num[$i].' ';
}

?>

<br>

<script type="text/javascript">
function readSingleFile(e) {
  var file = e.target.files[0];
  if (!file) {
    return;
  }
  var reader = new FileReader();
  reader.onload = function(e) {
    var contents = e.target.result;
    displayContents(contents);
  };
  reader.readAsText(file);
}

function displayContents(contents) {
  var element = document.getElementById('file-content');
  element.innerHTML = contents;
}

document.getElementById('file-input')
  .addEventListener('change', readSingleFile, false);
</script>

<input type="file" id="file-input" />
<h3>Contents of the file:</h3>
<pre id="file-content"></pre>