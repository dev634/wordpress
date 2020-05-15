window.onload = function () {
	function byId(baseName, arg = "") {
		const id = "#" + baseName + arg;
		return document.querySelector(id);
	}

	function listen(element, eventName, callback) {
		if (typeof eventName === "string") {
			element.addEventListener(eventName, callback);
		} else {
			throw new Error("The Event should be a string");
		}
	}

	function handleClick(e) {
		console.log(this.id);
		switch(this.id){

			case 'acf-field_5ea0008c70834-Lundi': 	

				let element = byId('acf-group_5ea06f2027d73');
				if(this.parentNode.className ==='selected' && element){
					element.classList.add('d-none');
				}else{
					element.classList.remove('d-none');	
				}
				break;
				

			case 'acf-field_5ea0008c70834-Mardi': 	

				let element_2 = byId('acf-group_5ea06b1842345');

				if(this.parentNode.className ==='selected' && element_2){
					element_2.classList.add('d-none');
				}else{
					element_2.classList.remove('d-none');
				}
				break;

			case 'acf-field_5ea0008c70834-Mercredi': 	

				let element_3 = byId('acf-group_5ea07573151f8');

				if(this.parentNode.className ==='selected' && element_3){
					element_3.classList.add('d-none');
				}else{
					element_3.classList.remove('d-none');
				}
				break;

			case 'acf-field_5ea0008c70834-Jeudi': 	

				let element_4 = byId('acf-group_5ea079adc8508');

				if(this.parentNode.className ==='selected' && element_4){
					element_4.classList.add('d-none');
				}else{
					element_4.classList.remove('d-none');
				}
				break;

			case 'acf-field_5ea0008c70834-Vendredi': 	

				let element_5 = byId('acf-group_5ea07b256c972');

				if(this.parentNode.className ==='selected' && element_5){
					element_5.classList.add('d-none');
				}else{
					element_5.classList.remove('d-none');
				}
				break;
			
			case 'acf-field_5ea0008c70834-Samedi': 	

				let element_6 = byId('acf-group_5ea07cd758296');

				if(this.parentNode.className ==='selected' && element_6){
					element_6.classList.add('d-none');
				}else{
					element_6.classList.remove('d-none');
				}
				break;

			case 'acf-field_5ea0008c70834-Dimanche': 	

				let element_7 = byId('acf-group_5ea07cdb95552');

				if(this.parentNode.className ==='selected' && element_7){
					element_7.classList.add('d-none');
				}else{
					element_7.classList.remove('d-none');
				}
				break;
			
			default: throw new Error('The id is not good try again ...');
			}
			
		}




	
		

	let days = [
		"Lundi",
		"Mardi",
		"Mercredi",
		"Jeudi",
		"Vendredi",
		"Samedi",
		"Dimanche"
	];

	days.forEach(elmt => {
		let element = byId("acf-field_5ea0008c70834-", elmt);
		listen(element, "click", handleClick);
	});
};
