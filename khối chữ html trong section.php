<div data-section-id="{{ section.id }}" data-section-type="section-banner-product" style="{% if section.settings.margin_top != blank %}margin-top: {{section.settings.margin_top}}px;{%endif%} {% if section.settings.margin_bottom != blank %}margin-bottom: {{section.settings.margin_bottom}}px;{% endif %}">
            <section class="shop-home">
                <div class="container">
                  <h3 class="title-cate" style="color:{{section.settings.title_color}};">{{section.settings.title_total}}</h3>
                  <div class="cate-total">
                    {%for i in (1..10)%}
                    {% capture text_button_category %}text_button_category{{ i }}{% endcapture %}
                    {% capture urlcategory %}urlcategory{{ i }}{% endcapture %}
                    	 <div class="cate-item">
                           	<div class="category-title">
                              <a href="{{section.settings[urlcategory]}}" title="" class="btn btn-dark btn-outline">{{section.settings[text_button_category]}}</a>
                           </div>
                    	</div>
                    {%endfor%}
                  </div>
                  <div class="content-dress-acc">
                    	<div class="content-dress-acc-main">
                          	{{section.settings.content_dre_main}}
                    	</div>
                  </div>
              	</div>
  			</section>
</div>
{% schema %}
  {
    "name": "Shop these categories",
    "settings": [
		{
            "type": "text",
            "id": "title_total",
            "label": "Tittle",
            "default": "Shop these categories"
        },
		{
          "type": "color",
          "id": "title_color",
          "label": "Color title"
        },
		{
          "type": "header",
          "content": "Categories 1"
        },
  		{
            "type": "text",
            "id": "text_button_category1",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory1",
            "label": "URL"
    	},
  		
  		{
          "type": "header",
          "content": "Categories 2"
        },
  		{
            "type": "text",
            "id": "text_button_category2",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory2",
            "label": "URL"
    	},
  
  		{
          "type": "header",
          "content": "Categories 3"
        },
  		{
            "type": "text",
            "id": "text_button_category3",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory3",
            "label": "URL"
    	},
  
  		{
          "type": "header",
          "content": "Categories 4"
        },
  		{
            "type": "text",
            "id": "text_button_category4",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory4",
            "label": "URL"
    	},
  
  		{
          "type": "header",
          "content": "Categories 5"
        },
  		{
            "type": "text",
            "id": "text_button_category5",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory5",
            "label": "URL"
    	},

		{
          "type": "header",
          "content": "Categories 6"
        },
  		{
            "type": "text",
            "id": "text_button_category6",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory6",
            "label": "URL"
    	},
  		
  		{
          "type": "header",
          "content": "Categories 7"
        },
  		{
            "type": "text",
            "id": "text_button_category7",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory7",
            "label": "URL"
    	},
  
  		{
          "type": "header",
          "content": "Categories 8"
        },
  		{
            "type": "text",
            "id": "text_button_category8",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory8",
            "label": "URL"
    	},
  
  		{
          "type": "header",
          "content": "Categories 9"
        },
  		{
            "type": "text",
            "id": "text_button_category9",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory9",
            "label": "URL"
    	},
  
  		{
          "type": "header",
          "content": "Categories 10"
        },
  		{
            "type": "text",
            "id": "text_button_category10",
            "label": "Text button category",
            "default": "category"
        },
        {
            "type": "url",
            "id": "urlcategory10",
            "label": "URL"
    	},
		
		{
          "type": "header",
          "content": "Content below"
        },
		{
            "type": "html",
            "id": "content_dre_main",
            "label": "Custom HTML"
        }



],
"presets": [
    {
      "name": "Shop these categories",
      "category": "banner"
    }
  ]
  }
{% endschema %}

{% stylesheet %}
{% endstylesheet %}

{% javascript %}
{% endjavascript %}
