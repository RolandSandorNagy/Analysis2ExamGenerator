<script type="text/javascript">


	function change(obj) {

		if (obj.getAttribute('data-disabled') == '1') {
     		return;
		}

		obj.setAttribute('data-disabled', '1');
		
		if(/*document.getElementById(id).value*/obj.value == "Mutat") {
			obj.value="Elrejt";
			obj.className="btn btn-warning mutat";
			obj.title="Megoldás elrejtése";
		} else {
			obj.value="Mutat";
			obj.className="btn btn-default mutat";
			obj.title="Megoldás mutatása";
		}		

		setTimeout(function(){
		    obj.setAttribute('data-disabled', '0');
		}, 300); // 1500 : ameddig a collapse fut
	}

	function change2(obj) {

		if (obj.getAttribute('data-disabled') == '1') {
     		return;
		}

		obj.setAttribute('data-disabled', '1');
		
		if(obj.value == "Mutat") {
			obj.value="Elrejt";
			obj.className="btn btn-danger mutat";
			obj.title="Megoldás elrejtése";
		} else {
			obj.value="Mutat";
			obj.className="btn btn-default mutat";
			obj.title="Megoldás mutatása";
		}		

		setTimeout(function(){
		    obj.setAttribute('data-disabled', '0');
		}, 300); // 1500 : ameddig a collapse fut
	}


	function changeCim(obj) {

		if (obj.getAttribute('data-disabled') == '1') {
     		return;
		}

		obj.setAttribute('data-disabled', '1');
		
		if(obj.value == "Mutat") {
			obj.value="Elrejt";
			obj.className="btn btn-warning mutat";
			obj.title="Elrejtése";
		} else {
			obj.value="Mutat";
			obj.className="btn btn-info mutat";
			obj.title="Mutatása";
		}		

		setTimeout(function(){
		    obj.setAttribute('data-disabled', '0');
		}, 300); // 1500 : ameddig a collapse fut
	}


	function changeCim2(obj) {

		if (obj.getAttribute('data-disabled') == '1') {
     		return;
		}

		obj.setAttribute('data-disabled', '1');
		
		if(/*document.getElementById(id).value*/obj.className == "btn btn-primary mutat kiscimgomb") {
			obj.value="Elrejt";
			obj.className="btn btn-danger mutat kiscimgomb";
			obj.title="Elrejtése";
		} else {
			obj.value="Mutat";
			obj.className="btn btn-primary mutat kiscimgomb";
			obj.title="Mutatása";
		}		

		setTimeout(function(){
		    obj.setAttribute('data-disabled', '0');
		}, 150); // 1500 : ameddig a collapse fut
	}



</script>
