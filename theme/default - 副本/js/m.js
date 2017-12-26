$(function(){
        $(".news-item").sudyPubdate({
               target:".item-date",
               prefix_0:false,
               tpl:"%m%.%d%"
        });
		
		$(".event-item").sudyPubdate({
               target:".item-date",
               prefix_0:false,
               tpl:'<span class="date-month">%m%</span><span class="date-day">%d%</span>'
        });
});