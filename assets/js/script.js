// const navbarr = querySelector('.navbarr');

// navbar.addEventListener('click', function(e){
// 	if(e.target.className=='.nav-itemm'){
// 		// e.target.classList.add('.active');
// 		alert('ok');
// 		e.preventDefault();
// 	}
// });

// $(function(){

// 	$('.navitem').on('click', function(){
// 		$('.nav-item').addClass('active');
// 	});

	// $('.navbarr').on('click', function(){
	// 	$('.nav-itemm')
	// });

// });

// function handler(event){
// 	const target = $(event.target);
// 	if(target.is("active")){
// 		target.children().toggle();
// 	}
// }

// $('li').click(handler).addClass('active');;

$('.nav-item li').on('click', function(){
	$('.nav-item li').removeClass('active');
	$(this).addClass('active');
});
