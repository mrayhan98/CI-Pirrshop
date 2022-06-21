function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
$(document).ready(function(){
	// Activate Carousel
	$("#myCarousel").carousel();

	// Enable Carousel Indicators
	$(".item1").click(function(){
	  $("#myCarousel").carousel(0);
	});
	$(".item2").click(function(){
	  $("#myCarousel").carousel(1);
	});
	$(".item3").click(function(){
	  $("#myCarousel").carousel(2);
	});
	$(".item4").click(function(){
	  $("#myCarousel").carousel(3);
	});

	// Enable Carousel Controls
	$(".left").click(function(){
	  $("#myCarousel").carousel("prev");
	});
	$(".right").click(function(){
	  $("#myCarousel").carousel("next");
	});
});

// $(function () {

//   var goToCartIcon = function($addTocartBtn){
//     var $cartIcon = $(".my-cart-icon");
//     var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
//     $addTocartBtn.prepend($image);
//     var position = $cartIcon.position();
//     $image.animate({
//       top: position.top,
//       left: position.left
//     }, 500 , "linear", function() {
//       $image.remove();
//     });
//   }

//   $('.my-cart-btn').myCart({
//     classCartIcon: 'my-cart-icon',
//     classCartBadge: 'my-cart-badge',
//     affixCartIcon: true,
//     checkoutCart: function(products) {
//       $.each(products, function(){
//         console.log(this);
//       });
//     },
//     clickOnAddToCart: function($addTocart){
//       goToCartIcon($addTocart);
//     },
//     getDiscountPrice: function(products) {
//       var total = 0;
//       $.each(products, function(){
//         total += this.quantity * this.price;
//       });
//       return total * 0.5;
//     }
//   });

// });
