if (!window.Slider)
{
	window.Slider = {

		init: function(params)
		{
			this.countItems = params.countItems || 1;
			this.selectorContainer = params.selectorContainer || ".slider-container";
			this.padding = params.padding || 10;
			this.countPagination = $(".slider .slider-item").length / this.countItems;

			$(".slider .slider-item").css("padding", this.padding + "px");

			let imgWidth = $(".slider").width() / this.countItems - 2 * this.padding;

			$(".slider img").css("width", imgWidth + "px");

			$(".slider-left").css("height", $(this.selectorContainer).height() + 2*this.padding);
			$(".slider-right").css("height", $(this.selectorContainer).height() + 2*this.padding);

			$(".slider-left").css("top", $(".slider").offset().top);
			$(".slider-right").css("top", $(".slider").offset().top);

			this.initPagination();

			this.bindEvents();
		},

		initPagination: function()
		{
			for (let i = 0; i < this.countPagination; ++i)
			{
				let html = $(this.selectorContainer + " .slider-pagination").html();
				$(this.selectorContainer + " .slider-pagination").html(html +
					'<span data-pagination="' + (i+1) + '" class="slider-pagination-item ml-1 p-1"></span>');
			}

			let firstPagination = $(this.selectorContainer + " .slider-pagination").find(".slider-pagination-item:first-child");

			if (firstPagination.length > 0)
			{
				firstPagination.addClass("slider-pagination-item-active");
			}
		},

		bindEvents: function()
		{
			this.bindChangePagination();
			this.bindClickLeft();
			this.bindClickRight();
		},

		bindChangePagination: function()
		{
			self = this;

			$(".slider-pagination-item").on("click", function(){

				$(".slider-pagination-item-active").removeClass("slider-pagination-item-active");
				$(this).addClass("slider-pagination-item-active");

				let page = $(this).data("pagination");
				let offset = - $(".slider").width() * (page - 1);
				$(".inner-slider").css("transform", "translate(" + offset + "px, 0px)");
			});
		},

		bindClickLeft: function()
		{
			self = this;

			$(".slider-left").on("click", function(){

				let currentPagination = $(".slider-pagination-item-active").data("pagination");

				if (currentPagination == 1)
				{
					$("[data-pagination='" + self.countPagination + "']").trigger("click");
				}
				else
				{
					$("[data-pagination='" + (currentPagination - 1) + "']").trigger("click");
				}
			});
		},

		bindClickRight: function()
		{
			$(".slider-right").on("click", function(){

				let currentPagination = $(".slider-pagination-item-active").data("pagination");

				if (currentPagination == self.countPagination)
				{
					$("[data-pagination='" + 1 + "']").trigger("click");
				}
				else
				{
					$("[data-pagination='" + (currentPagination + 1) + "']").trigger("click");
				}
			});
		}
	};
}