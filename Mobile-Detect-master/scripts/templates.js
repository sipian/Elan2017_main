this["mms"] = this["mms"] || {};
this["mms"]["templates"] = this["mms"]["templates"] || {};
this["mms"]["templates"]["category-template-not-make"] = Handlebars.template({"1":function(depth0,helpers,partials,data) {
    var stack1, helper, alias1=helpers.helperMissing, alias2="function", alias3=this.escapeExpression;

  return "<li class=\"category__container js-masonry-projects-block-c\" data-category=\"\" data-categoryId=\""
    + alias3(((helper = (helper = helpers.id || (depth0 != null ? depth0.id : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"id","hash":{},"data":data}) : helper)))
    + "\">\n    <section data-anchor=\""
    + alias3(((helper = (helper = helpers.slug || (depth0 != null ? depth0.slug : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"slug","hash":{},"data":data}) : helper)))
    + "\" id=\""
    + alias3(((helper = (helper = helpers.slug || (depth0 != null ? depth0.slug : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"slug","hash":{},"data":data}) : helper)))
    + "\">\n        <div class=\"category-intro\">\n            <div class=\"category-intro__title\">\n                <h3>"
    + ((stack1 = ((helper = (helper = helpers.title || (depth0 != null ? depth0.title : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"title","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</h3>\n            </div>\n            <p class=\"category-intro__description\">"
    + ((stack1 = ((helper = (helper = helpers.description || (depth0 != null ? depth0.description : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"description","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</p>\n        </div>\n        <ul id=\"project-list\" class=\"projects__wrapper js-add-projects no-list grid\">\n"
    + ((stack1 = this.invokePartial(partials.projects,(depth0 != null ? depth0.projects : depth0),{"name":"projects","data":data,"indent":"            ","helpers":helpers,"partials":partials})) != null ? stack1 : "")
    + "        </ul>\n    </section>\n</li>\n";
},"compiler":[6,">= 2.0.0-beta.1"],"main":function(depth0,helpers,partials,data) {
    var stack1;

  return ((stack1 = helpers.each.call(depth0,depth0,{"name":"each","hash":{},"fn":this.program(1, data, 0),"inverse":this.noop,"data":data})) != null ? stack1 : "");
},"usePartial":true,"useData":true});
this["mms"]["templates"]["category-template-who-we-are-temp"] = Handlebars.template({"1":function(depth0,helpers,partials,data) {
    var stack1, helper, alias1=helpers.helperMissing, alias2="function", alias3=this.escapeExpression;

  return "<li class=\"category__container js-masonry-projects-block-a\" data-category=\"\" data-categoryId=\""
    + alias3(((helper = (helper = helpers.id || (depth0 != null ? depth0.id : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"id","hash":{},"data":data}) : helper)))
    + "\">\n    <section data-anchor=\""
    + alias3(((helper = (helper = helpers.slug || (depth0 != null ? depth0.slug : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"slug","hash":{},"data":data}) : helper)))
    + "\" id=\""
    + alias3(((helper = (helper = helpers.slug || (depth0 != null ? depth0.slug : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"slug","hash":{},"data":data}) : helper)))
    + "\">\n        <div class=\"category-intro\">\n            <div class=\"category-intro__title\">\n                <h3>"
    + ((stack1 = ((helper = (helper = helpers.title || (depth0 != null ? depth0.title : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"title","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</h3>\n            </div>\n            <p class=\"category-intro__description\">"
    + ((stack1 = ((helper = (helper = helpers.description || (depth0 != null ? depth0.description : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"description","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</p>\n        </div>\n        <ul id=\"project-list\" class=\"projects__wrapper js-add-projects no-list grid\">\n"
    + ((stack1 = this.invokePartial(partials.projects,(depth0 != null ? depth0.projects : depth0),{"name":"projects","data":data,"indent":"            ","helpers":helpers,"partials":partials})) != null ? stack1 : "")
    + "        </ul>\n    </section>\n</li>\n";
},"compiler":[6,">= 2.0.0-beta.1"],"main":function(depth0,helpers,partials,data) {
    var stack1;

  return ((stack1 = helpers.each.call(depth0,depth0,{"name":"each","hash":{},"fn":this.program(1, data, 0),"inverse":this.noop,"data":data})) != null ? stack1 : "");
},"usePartial":true,"useData":true});
this["mms"]["templates"]["category-template"] = Handlebars.template({"1":function(depth0,helpers,partials,data) {
    var stack1, helper, alias1=helpers.helperMissing, alias2="function", alias3=this.escapeExpression;

  return "<li class=\"category__container js-masonry-projects-block-b\" data-category=\"\" data-categoryId=\""
    + alias3(((helper = (helper = helpers.id || (depth0 != null ? depth0.id : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"id","hash":{},"data":data}) : helper)))
    + "\">\n    <section data-anchor=\""
    + alias3(((helper = (helper = helpers.slug || (depth0 != null ? depth0.slug : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"slug","hash":{},"data":data}) : helper)))
    + "\" id=\""
    + alias3(((helper = (helper = helpers.slug || (depth0 != null ? depth0.slug : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"slug","hash":{},"data":data}) : helper)))
    + "\">\n        <div class=\"category-intro\">\n            <div class=\"category-intro__title\">\n                <h3>"
    + ((stack1 = ((helper = (helper = helpers.title || (depth0 != null ? depth0.title : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"title","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</h3>\n            </div>\n            <p class=\"category-intro__description\">"
    + ((stack1 = ((helper = (helper = helpers.description || (depth0 != null ? depth0.description : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"description","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</p>\n        </div>\n        <ul id=\"project-list\" class=\"projects__wrapper js-add-projects no-list grid\">\n"
    + ((stack1 = this.invokePartial(partials.projects,(depth0 != null ? depth0.projects : depth0),{"name":"projects","data":data,"indent":"            ","helpers":helpers,"partials":partials})) != null ? stack1 : "")
    + "        </ul>\n    </section>\n</li>\n";
},"compiler":[6,">= 2.0.0-beta.1"],"main":function(depth0,helpers,partials,data) {
    var stack1;

  return ((stack1 = helpers.each.call(depth0,depth0,{"name":"each","hash":{},"fn":this.program(1, data, 0),"inverse":this.noop,"data":data})) != null ? stack1 : "");
},"usePartial":true,"useData":true});
this["mms"]["templates"]["project-gallery-template"] = Handlebars.template({"1":function(depth0,helpers,partials,data) {
    var stack1;

  return "    <li>\n        <div class=\"gallery-item__wrapper\">\n"
    + ((stack1 = (helpers.if_eq || (depth0 && depth0.if_eq) || helpers.helperMissing).call(depth0,(depth0 != null ? depth0.type : depth0),"image",{"name":"if_eq","hash":{},"fn":this.program(2, data, 0),"inverse":this.program(4, data, 0),"data":data})) != null ? stack1 : "")
    + "        </div>\n    </li>\n";
},"2":function(depth0,helpers,partials,data) {
    var helper;

  return "            <img src=\"http://admin.meyermillersmith.com/"
    + this.escapeExpression(((helper = (helper = helpers.image || (depth0 != null ? depth0.image : depth0)) != null ? helper : helpers.helperMissing),(typeof helper === "function" ? helper.call(depth0,{"name":"image","hash":{},"data":data}) : helper)))
    + "\"> ";
},"4":function(depth0,helpers,partials,data) {
    var helper;

  return "\n            <div class=\"gallery-item__video\">\n                <iframe src=\"//player.vimeo.com/video/"
    + this.escapeExpression(((helper = (helper = helpers.id || (depth0 != null ? depth0.id : depth0)) != null ? helper : helpers.helperMissing),(typeof helper === "function" ? helper.call(depth0,{"name":"id","hash":{},"data":data}) : helper)))
    + "\" width=\"100%\" height=\"100%\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen style=\"margin-bottom: 0px;\"></iframe>\n            </div>\n";
},"compiler":[6,">= 2.0.0-beta.1"],"main":function(depth0,helpers,partials,data) {
    var stack1, helper, alias1=helpers.helperMissing, alias2="function", alias3=this.escapeExpression;

  return "<ul class=\"no-list project__gallery\">\n"
    + ((stack1 = helpers.each.call(depth0,(depth0 != null ? depth0.gallery : depth0),{"name":"each","hash":{},"fn":this.program(1, data, 0),"inverse":this.noop,"data":data})) != null ? stack1 : "")
    + "</ul>\n<article class=\"project__text\">\n    <div class=\"project__text__wrapper\">\n        <h1>"
    + ((stack1 = ((helper = (helper = helpers.title || (depth0 != null ? depth0.title : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"title","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</h1>\n        <div class=\"project__description\">\n            <p>"
    + ((stack1 = ((helper = (helper = helpers.description || (depth0 != null ? depth0.description : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"description","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</p>\n        </div>\n        <div class=\"project__info\">\n            <p><a href=\""
    + alias3(((helper = (helper = helpers.link || (depth0 != null ? depth0.link : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"link","hash":{},"data":data}) : helper)))
    + "\" title=\""
    + alias3(((helper = (helper = helpers.link_title || (depth0 != null ? depth0.link_title : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"link_title","hash":{},"data":data}) : helper)))
    + "\" target=\"_blank\">"
    + ((stack1 = ((helper = (helper = helpers.link_title || (depth0 != null ? depth0.link_title : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"link_title","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</a></p>\n        </div>\n    </div>\n</article>\n<div class=\"project__next-wrapper js-next-project\">\n    <div class=\"project__next-background\" style='transform: translateY(0)'></div>\n    <div class=\"project__next-arrow__wrapper \">\n        <div class=\"project__next-arrow\"></div>\n        <div class=\"project__next-arrow-background\"></div>\n    </div>\n    <div class=\"project__next-message\">\n        <p data-translate=\"whatWeDid.scroll_to_next_project\">Zum nächsten Projekt weiterscrollen</p>\n    </div>\n</div>\n";
},"useData":true});
this["mms"]["templates"]["project-template"] = Handlebars.template({"1":function(depth0,helpers,partials,data) {
    var stack1, helper, alias1=helpers.helperMissing, alias2="function", alias3=this.escapeExpression;

  return "<li class=\"project__container grid-item\" data-catedgoryId=\""
    + alias3(((helper = (helper = helpers.category_id || (depth0 != null ? depth0.category_id : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"category_id","hash":{},"data":data}) : helper)))
    + "\">\n    <div class=\"project\">\n        <a href=\"/"
    + alias3(((helper = (helper = helpers.selected_language || (depth0 != null ? depth0.selected_language : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"selected_language","hash":{},"data":data}) : helper)))
    + "/"
    + alias3(((helper = (helper = helpers.section || (depth0 != null ? depth0.section : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"section","hash":{},"data":data}) : helper)))
    + "/"
    + alias3(((helper = (helper = helpers.slug || (depth0 != null ? depth0.slug : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"slug","hash":{},"data":data}) : helper)))
    + "\" class=\"project__link js-show-portfolio\" data-catedgoryId=\""
    + alias3(((helper = (helper = helpers.category_id || (depth0 != null ? depth0.category_id : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"category_id","hash":{},"data":data}) : helper)))
    + "\"></a>\n        <div class=\"project__image\">\n            <img src=\"http://admin.meyermillersmith.com/"
    + alias3(((helper = (helper = helpers.poster || (depth0 != null ? depth0.poster : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"poster","hash":{},"data":data}) : helper)))
    + "\" alt=\""
    + alias3(((helper = (helper = helpers.title || (depth0 != null ? depth0.title : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"title","hash":{},"data":data}) : helper)))
    + "\" />\n        </div>\n        <div class=\"project__title\">\n            <h5>"
    + ((stack1 = ((helper = (helper = helpers.title || (depth0 != null ? depth0.title : depth0)) != null ? helper : alias1),(typeof helper === alias2 ? helper.call(depth0,{"name":"title","hash":{},"data":data}) : helper))) != null ? stack1 : "")
    + "</h5>\n        </div>\n    </div>\n</li>\n";
},"compiler":[6,">= 2.0.0-beta.1"],"main":function(depth0,helpers,partials,data) {
    var stack1;

  return ((stack1 = helpers.each.call(depth0,depth0,{"name":"each","hash":{},"fn":this.program(1, data, 0),"inverse":this.noop,"data":data})) != null ? stack1 : "");
},"useData":true});