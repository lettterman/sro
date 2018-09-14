
$(".owl-carousel").owlCarousel({
                loop:true, //Зацикливаем слайдер
                margin:20, //Отступ от элемента справа в 50px
                nav:true, //Отключение навигации
                autoplay:true, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:2000, //Время смены слайда
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                	0:{
                		items:1
                	},
                	600:{
                		items:2
                	},
                	1000:{
                		items:3
                	}
                }
            });

var owl=$(".owl-carousel");
	owl.owlCarousel();
	//$(".next") - находим нашу кнопку
	$(".next").click(function(){
		owl.trigger("next.owl.carousel");
	});
	$(".prev").click(function(){
		owl.trigger("prev.owl.carousel");
	});

$('.open_popup').click(function() {
    var popup_id = $('#' + $(this).attr("rel"));
    $(popup_id).show();
    $('.overlay').show();
})
$('.popup .close, .overlay').click(function() {
    $('.overlay, .popup').hide();
})
    
