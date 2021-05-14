$(()=>{
	$(".images-thumbs img").on("mouseenter",function(e){
		let s = $(this).attr("src");
		$(".images-main img").attr("src",s);
	})

	});
