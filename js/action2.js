function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}

// $(document).ready(function(){
//     $('.nav').affix({offset: {top: 205} }); 

//     $('#button-cart1').click(function()
// 	{
// 		var nama = $('.nama'+1).val();
// 		var harga = $('.harga'+1).val();
// 		var hasil = "<tr><td>"+nama+"</td><td>"+harga+"</td><td><button class='btn btn-danger' id='hapus'>Hapus</button></td></tr>";
// 		$('.hasil').append(hasil);
// 	});
// 	$('#button-cart2').click(function()
// 	{
// 		var nama = $('.nama'+2).val();
// 		var harga = $('.harga'+2).val();
// 		var hasil = "<tr><td>"+nama+"</td><td>"+harga+"</td><td><button class='btn btn-danger' id='hapus'>Hapus</button></td></tr>";
// 		$('.hasil').append(hasil);
// 	});
// 	$('#button-cart3').click(function()
// 	{
// 		var nama = $('.nama'+3).val();
// 		var harga = $('.harga'+3).val();
// 		var hasil = "<tr><td>"+nama+"</td><td>"+harga+"</td><td><button class='btn btn-danger' id='hapus'>Hapus</button></td></tr>";
// 		$('.hasil').append(hasil);
// 	});
// 	$('#button-cart4').click(function()
// 	{
// 		var nama = $('.nama'+4).val();
// 		var harga = $('.harga'+4).val();
// 		var hasil = "<tr><td>"+nama+"</td><td>"+harga+"</td><td><button class='btn btn-danger' id='hapus'>Hapus</button></td></tr>";
// 		$('.hasil').append(hasil);
// 	});
// 	$('#button-cart5').click(function()
// 	{
// 		var nama = $('.nama'+5).val();
// 		var harga = $('.harga'+5).val();
// 		var hasil = "<tr><td>"+nama+"</td><td>"+harga+"</td><td><button class='btn btn-danger' id='hapus'>Hapus</button></td></tr>";
// 		$('.hasil').append(hasil);
// 	});
// 	$('#button-cart6').click(function()
// 	{
// 		var nama = $('.nama'+6).val();
// 		var harga = $('.harga'+6).val();
// 		var hasil = "<tr><td>"+nama+"</td><td>"+harga+"</td><td><button class='btn btn-danger' id='hapus'>Hapus</button></td></tr>";
// 		$('.hasil').append(hasil);
// 	});
// 	$('.hasil').on('click','#hapus',function()
// 	{
// 		$(this).closest('tr').remove();
// 	});

// 	$.getJSON("categori.json",function(data){
// 		console.log(data);
// 		var i = 0;
// 		$.each(data.categories, function(i, categories){
// 			$("#cat"+i).html(categories.name);
// 			i++;
// 			if(i == 6){
// 				return false;
// 			}
// 		})
// 	})
// });
// function saving(){
// 	var html = "<tr><td>"+$('#nama').val()+"</td><td>"+$('#harga').val()+"</td><td><button id='hapus'>Hapus</button></td></tr>";
// 		$('.hasil').append(html);
// }