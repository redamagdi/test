function AddItems(){
	$("#allItems").slideUp(function(){
		$("#AddM").slideDown();

}

function AddMenue(){
	$("#allMenus").slideUp(function(){
		$("#AddI").slideDown();
	});
}

function cancelAddMenue(){
	$("#AddM").slideUp(function(){
		$("#allMenus").slideDown();
	});
}